<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index()
    {
        $pdfs = Pdf::all();
        return view('auth.pdfs.index', compact('pdfs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        if ($request->file('pdf')) {
            $file = $request->file('pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('pdfs', $filename, 'public');

            Pdf::create(['filename' => $filename]);
        }

        return redirect()->route('pdfs.index')->with('success', 'Informe anual actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $pdf = Pdf::findOrFail($id);
        Storage::disk('public')->delete('pdfs/' . $pdf->filename);
        $pdf->delete();

        return redirect()->route('pdfs.index')->with('success', 'Informe anual eliminado.');
    }

    public function show()
    {
        $pdf = Pdf::latest()->first();
        return view('single', compact('pdf'));
    }
}
