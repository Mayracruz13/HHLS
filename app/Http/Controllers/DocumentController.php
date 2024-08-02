<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all(); // Obtener todos los documentos desde la base de datos
        return view('destinatation', compact('documents')); // Pasar 'documents' a la vista destinatation
    }

    public function create()
    {
        $documents = Document::all(); // Obtener todos los documentos para mostrar en la vista de creación
        return view('auth.document', compact('documents')); // Pasar 'documents' a la vista document
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'required|mimes:pdf|max:10000',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $pdfPath = $request->file('pdf')->store('pdfs', 'public');

        Document::create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->route('documents.create')->with('success', 'Actividad guardada exitosamente.');
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);

        // Elimina los archivos del almacenamiento
        Storage::disk('public')->delete($document->image_path);
        Storage::disk('public')->delete($document->pdf_path);

        // Elimina el registro de la base de datos
        $document->delete();

        return redirect()->route('documents.create')->with('success', 'Activida eliminada.');
    }
}
