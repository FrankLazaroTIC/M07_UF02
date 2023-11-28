<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    function signIn($v1,$v2,$v3,$v4) {
        $titol = $v1.' '.$v2.' '.$v3.' '.$v4;
        return view('signIn')->with('titol',$titol);
    }
    
    function signUp($v1,$v2,$v3) {
        $titol = $v1.' '.$v2.' '.$v3;
        return view('signUp')->with('titol',$titol);
    }

}
