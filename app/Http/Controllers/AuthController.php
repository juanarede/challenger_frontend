<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Controller
{

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        session(['is_authenticated' => true]);
        return redirect()->intended('/');
    }
    return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros.']);
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }



    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($user) {
            return redirect('/')->with('registro_exitoso', '¡Registro exitoso! Tu cuenta ha sido creada exitosamente.');
        }


        return redirect()->back()->withInput()->withErrors(['error' => 'Ha ocurrido un error al procesar tu registro.']);
    }
    
    public function registration()
    {
        return view('auth.register');
    }

}
