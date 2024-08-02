<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class PaymentController extends Controller
{
    private $client;

    public function __construct()
    {
        $environment = new SandboxEnvironment(
            config('services.paypal.client_id'),
            config('services.paypal.secret')
        );
        $this->client = new PayPalHttpClient($environment);
    }

    public function showPaymentForm()
    {
        return view('paypal.pago');
    }

    public function payWithPayPal(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $amount = $request->amount;
        $currency = 'MXN';

        $order = $this->createOrder($amount, $currency);

        if ($order['status'] === 'CREATED') {
            return redirect()->away($order['approval_link']);
        }

        return redirect()->route('paypal.pago')->with('error', 'Ocurrió un problema con el pago. Por favor, inténtelo de nuevo.');
    }

    private function createOrder($amount, $currency)
    {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            'intent' => 'CAPTURE',
            'purchase_units' => [[
                'amount' => [
                    'currency_code' => $currency,
                    'value' => $amount
                ]
            ]],
            'application_context' => [
                'return_url' => route('paypal.status'),
                'cancel_url' => route('paypal.status')
            ]
        ];

        try {
            $response = $this->client->execute($request);
            $approvalLink = $response->result->links[1]->href;

            return [
                'status' => 'CREATED',
                'approval_link' => $approvalLink
            ];
        } catch (\Exception $e) {
            \Log::error('PayPal API Error: ' . $e->getMessage());
            return [
                'status' => 'FAILED'
            ];
        }
    }

    public function getPaymentStatus(Request $request)
    {
        $orderId = $request->orderID;

        $request = new OrdersCaptureRequest($orderId);

        try {
            $response = $this->client->execute($request);
            $paymentDetails = $response->result;

            // Generar PDF del comprobante de pago
            $pdf = Pdf::loadView('paypal.receipt', ['payment' => $paymentDetails]);
            $pdf->save(storage_path('app/public/paypal_receipt.pdf'));

            return view('paypal.success', ['payment' => $paymentDetails]);
        } catch (\Exception $e) {
            \Log::error('PayPal API Error: ' . $e->getMessage());
            return redirect()->route('paypal.pago')
                             ->with('error', 'Ocurrió un problema con el pago. Por favor, inténtelo de nuevo.');
        }
    }
}
