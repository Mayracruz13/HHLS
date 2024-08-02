

<!DOCTYPE html>
<html>
<head>
    <title>Pagar con PayPal</title>
</head>
<body>
    <h1>Pagar con PayPal</h1>
    <form action="{{ route('paypal.pay') }}" method="POST">
        @csrf
        <label for="amount">Monto (MXN):</label>
        <input type="number" name="amount" step="0.01" required>
        <button type="submit">Pagar</button>
    </form>
    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
</body>
</html>
