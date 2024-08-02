<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:15',
            'apellidos' => 'required|string|max:15',
            'email' => 'required|email',
            'telefono' => 'required|digits:10',
            'edad' => 'required|integer|min:18',
            'sexo' => 'required|string',
            'ocupacion' => 'required|string|max:255'
        ]);

        Registro::create($request->all());

        return redirect()->back()->with('success', 'Registro exitoso');
    }

    public function index()
    {
        $registros = Registro::all();
        return view('auth.unidos', compact('registros'));
    }
}
