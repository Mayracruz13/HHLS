<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voluntario;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|regex:/^[\pL\s]+$/u',
            'apellidos' => 'required|string|regex:/^[\pL\s]+$/u',
            'email' => 'required|email',
            'telefono' => 'required|digits_between:7,15',
            'edad' => 'required|integer',
        ]);
        
        if ($request->edad < 18) {
            return redirect()->back()->with('error', 'No puedes unirte si eres menor de 18 años.');
        }

        Voluntario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'edad' => $request->edad,
        ]);

        return redirect('/registro')->with('success', '¡Gracias por registrarte!');
    }
}
