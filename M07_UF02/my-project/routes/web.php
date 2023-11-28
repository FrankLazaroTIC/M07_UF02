<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\SignController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/mostrar/{id}', [SignController::class, 'mostraByID']);


Route::get('/hola/{nom}', function ($nom) {
    return "Hello world xdx ".$nom;
});

//Path Sign in
Route::get('/sign/signin/{v1}/{v2}/{v3}/{v4}', [SignController::class, 'signIn']);

//Patg Sign up
Route::get('/sign/signup/{v1}/{v2}/{v3}',  [SignController::class, 'signUp']);



///////////Practica 2////////////
Route::get('/error', function(){
    return "Error d'accés";
})->name('errorAcces.index');


Route::post('/login', [LoginController::class, 'loginUsuari'])->middleware('login');
