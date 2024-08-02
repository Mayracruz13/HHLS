<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    // Muestra el formulario de carga y la lista de archivos
    public function showUploadForm()
    {
        $files = File::all(); // Obtener todos los archivos desde la base de datos
        return view('auth.upload', compact('files')); // Pasa la lista de archivos a la vista 'upload'
    }

    // Muestra la lista de archivos en la vista de voluntarios
    public function showFiles()
    {
        $files = File::all(); // Obtener todos los archivos desde la base de datos
        return view('voluntarios', compact('files')); // Pasa la lista de archivos a la vista 'voluntarios'
    }

    // Maneja la carga de archivos
    public function storeUploads(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx',
            'names.*' => 'nullable|string|max:255',
            'descriptions.*' => 'nullable|string|max:1000',
        ]);

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = $file->store('uploads', 'public');

                $fileModel = new File();
                $fileModel->filename = $file->getClientOriginalName();
                $fileModel->path = $path;
                $fileModel->name = $request->input('names.'.$key);
                $fileModel->description = $request->input('descriptions.'.$key);
                $fileModel->save();
            }
        }

        return redirect()->route('upload.form')->with('success', 'Representante actualizado exitosamente');
    }

    // Maneja la eliminación de un archivo
    public function deleteFile($id)
    {
        $file = File::find($id);

        if ($file) {
            Storage::disk('public')->delete($file->path);
            $file->delete();
            return redirect()->route('upload.form')->with('success', 'Representante eliminado exitosamente');
        }

        return redirect()->route('upload.form')->with('error', 'File not found');
    }
}
