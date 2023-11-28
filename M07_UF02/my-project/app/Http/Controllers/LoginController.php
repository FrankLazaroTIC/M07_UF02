<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     function loginUsuari(){
        $email = request('email');
        $password = request('password');
    
        //Array usuaris amb emails y passwords
        $usuaris = [
            'professor' => ['email' => 'professor@gmail.com', 'password' => '123'],
            'alumne' => ['email' => 'alumne@gmail.com', 'password' => '123'],
            'admin' => ['email' => 'admin@gmail.com', 'password' => '123'],
        ];
    
        //Variable que utilitzarem per guardar el login de l'usuari
        $usuariLogin;

        foreach ($usuaris as $usuari => $infoUsuaris) {
            if ($infoUsuaris['email'] === $email && $infoUsuaris['password'] === $password) {
                $usuariLogin = $usuari;
                break;
            }
        }

        //Verificació d'usuaris
        if ($usuariLogin === 'professor') {
            return view('practica2.professor')->with('email', $email);
        } elseif ($usuariLogin === 'alumne') {
            return view('practica2.alumne')->with('email', $email);
        } elseif ($usuariLogin === 'admin') {
            return view('practica2.centre')->with('email', $email);
        } //else {
            //return to_route('errorAcces.index');
        //}

    }

}
