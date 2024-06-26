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
    return view('welcome');
});

Route::get('/comics', function () {
    $comics = config('comics');
    /* dd($comics); */
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/comics/Action Comics', function () {
    $comics = config('comics')[0];
    /* dd($comics); */
    return view('action-comics', compact('comics'));
})->name('action-comics');

Route::get('/comics/American Vampire 1976', function () {
    $comics = config('comics')[1];
    /* dd($comics); */
    return view('american-vampire', compact('comics'));
})->name('american-vampire');

Route::get('/comics/Aquaman', function () {
    $comics = config('comics')[2];
    /* dd($comics); */
    return view('aquaman', compact('comics'));
})->name('aquaman');
