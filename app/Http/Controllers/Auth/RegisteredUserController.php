<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => [
            'required',
            'confirmed',
            // Puedes ajustar o eliminar las reglas adicionales según tus necesidades
            'min:8',
            'regex:/[a-z]/',   // Al menos una letra minúscula
            'regex:/[0-9]/',   // Al menos un número
            'regex:/[\W_]/',   // Al menos un símbolo (carácter especial)
        ],
    ], [
        'password.required' => 'La contraseña es obligatoria.',
        'password.confirmed' => 'La confirmación de la contraseña no coincide.',
        'password.min' => 'La contraseña debe tener al menos :min caracteres.',
        'password.regex' => 'La contraseña debe contener al menos una letra minúscula, un número y un símbolo.',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(route('dashboard', absolute: false));
}

}
