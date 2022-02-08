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

    
});
