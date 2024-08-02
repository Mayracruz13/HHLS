<?php

// app/Http/Controllers/ContribuyenteController.php

// app/Http/Controllers/ContribuyenteController.php

namespace App\Http\Controllers;

use App\Models\Contribuyente;
use Illuminate\Http\Request;

class ContribuyenteController extends Controller
{
    public function index()
    {
        $contribuyentes = Contribuyente::all();
        return view('auth.ver_contribuyentes', compact('contribuyentes'));
    }

    // Método para guardar ya definido previamente
    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'edad' => 'required|integer',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|string|email|max:255',
            'archivo' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $archivoPath = $request->file('archivo')->store('archivos', 'public');

        Contribuyente::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'edad' => $request->edad,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'archivo' => $archivoPath,
        ]);

        return redirect()->back()->with('success', 'Contribuyente guardado correctamente.');
    }
}
