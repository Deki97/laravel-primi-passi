<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Tramite il Route indirizzo l'utente alla pagina passata in view
// In questo caso passo anche dei dati in modo che vengano visualizzati dinamicamente all'interno di home.blade.php
Route::get('/', function () {
    $info = [
        'name' => 'Dejan',
        'lastname' => 'Nikolic',
        'age' => 24,
        'interests' => [
            'Programming',
            'Basketball',
            'Reading',
            'Films'
        ]
    ];
    return view('home', $info);
})->name('home');


Route::get('/about-me', function() {
    return view('about');
})->name('about');


Route::get('/news', function() {
    return view('news');
})->name('news');


Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');
