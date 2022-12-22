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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

//Rutas del Profesor
Route::get('/teach/admin', function () {
    return view('teach.manager');
})->name('manager');
Route::get('/teach/dashboard', function () {
    return view('teach.panel');
})->name('panel');
Route::get('/teach/entrega', function () {
    return view('teach.input');
})->name('input');
Route::get('/teach/buscar', function () {
    return view('teach.search');
})->name('buscar');
Route::get('/teach/devolucion', function () {
    return view('teach.output');
})->name('output');
Route::get('/teach/requerimiento', function () {
    return view('teach.requerimient');
})->name('requerimient');
Route::get('/teach/practicas', function () {
    return view('teach.test');
})->name('test');