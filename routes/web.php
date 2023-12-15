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
    return view('home');
})->name('home');

Route::get('/about', function () {
    $name = 'Mahdi';
    $surname = 'Nasser';
    $data = [
        'name'=> $name,
        'surname'=> $surname,
        'date_of_birth'=> '07/01/1994',
    ];
    return view('/pages.about', $data);
})->name('about');

Route::get('/project', function () {
    return view('pages.projects');
});
