<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function create()
    {
        $activities = Activity::all(); // Obtener todas las actividades
        return view('auth.create', compact('activities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'required|mimes:pdf|max:10000',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // Guardar la imagen y el PDF en storage
        $imagePath = $request->file('image')->store('images', 'public');
        $pdfPath = $request->file('pdf')->store('pdfs', 'public');

        // Crear una nueva actividad en la base de datos
        Activity::create([
            'image' => $imagePath,
            'pdf' => $pdfPath,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('activities.create')->with('success', 'Actividad guardada exitosamente.');
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        
        // Eliminar archivos del almacenamiento
        \Storage::disk('public')->delete($activity->image);
        \Storage::disk('public')->delete($activity->pdf);

        // Eliminar el registro de la base de datos
        $activity->delete();

        return redirect()->route('activities.create')->with('success', 'Actividad eliminada.');
    }

    public function participacion()
    {
        $activities = Activity::all(); // Obtener todas las actividades
        return view('participacion', compact('activities'));
    }
}
