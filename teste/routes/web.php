<?php

use Illuminate\Support\Facades\Route;

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

    $nome = "Andrey";
    $idade = 17;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/contact', function () {

    $test = "Testando as Arrays";

    return view('contact', ['test' => $test]);
});
