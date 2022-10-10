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
    return view('site/index');
})->name('inicio');

Route::get('/blog', function () {
    return view('site/blog');
})->name('blog');

Route::get('/contato', function () {
    return view('site/contato');
})->name('contato');

Route::get('/sobre-nos', function () {
    return view('site/sobre-nos');
})->name('sobre-nos');

Route::get('/artigo-blog', function () {
    return view('site/artigo-blog');
})->name('artigo-blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
