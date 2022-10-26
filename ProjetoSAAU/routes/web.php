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


Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/admin/noticias/editar', [App\Http\Controllers\NoticiasController::class, 'index'])->name('editarnoticias')->middleware('auth');
Route::get('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias')->middleware('auth');
Route::post('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'store'])->name('salvar')->middleware('auth');

Route::get('/admin/funcionarios', [App\Http\Controllers\CadastroUsuarioController::class, 'create'])->name('admin/funcionarios')->middleware('auth');
Route::post('/admin/cadastrar/funcionarios', [App\Http\Controllers\CadastroUsuarioController::class, 'store'])->name('salvar_funcionario')->middleware('auth');
Route::get('/admin/ver/funcionarios', [App\Http\Controllers\CadastroUsuarioController::class, 'show'])->name('mostrar_funcionario')->middleware('auth');
Route::get('/admin/del/funcionarios/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'destroy'])->name('deletar_funcionario')->middleware('auth');
Route::get('/admin/edit/funcionarios/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'edit'])->name('editar_funcionario')->middleware('auth');
Route::post('/admin/atualizar/funcionarios/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'update'])->name('atualizar_funcionario')->middleware('auth');



Route::get('/usuario/perfil', [App\Http\Controllers\UsuarioController::class, 'create'])->name('perfil')->middleware('auth');
Route::post('/admin/cadastrar/usuario', [App\Http\Controllers\UsuarioController::class, 'store'])->name('salvar_perfil')->middleware('auth');
