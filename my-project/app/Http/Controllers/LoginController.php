<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        Usuari::create($request->all());

        return "La inserció es correcte. <a href='/login'>Iniciar sessió usuari</a>";
    }

    public function login(Request $request)
    {
        $email = Usuari::where('email', $request->input('email'))->first();
        $password = Usuari::where('contrassenya', $request->input('contrassenya'))->first();
        $emailMostra = $request->input('email');

        if ($email && $password) {
            // Contraseña correcta
            if ($email->rol == 'estudiant') {
                return view('practica2.alumne')->with('email', $emailMostra);
            } elseif ($email->rol == 'centre') {
                return view('practica2.centre')->with('email', $emailMostra);
            } elseif ($email->rol == 'professor') {
                return view('practica2.professor')->with('email', $emailMostra);
            } 
        } 
    }
}