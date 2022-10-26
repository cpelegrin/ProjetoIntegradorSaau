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

Route::get('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias')->middleware('auth');
Route::post('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'store'])->name('salvar')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin/funcionarios')->group(function () {

        Route::get('', [App\Http\Controllers\CadastroUsuarioController::class, 'create'])->name('admin/funcionarios');
        Route::post('/cadastrar', [App\Http\Controllers\CadastroUsuarioController::class, 'store'])->name('salvar_funcionario');
        Route::get('/mostrar', [App\Http\Controllers\CadastroUsuarioController::class, 'show'])->name('mostrar_funcionario');
        Route::get('/deletar/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'destroy'])->name('deletar_funcionario');
        Route::get('/edit/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'edit'])->name('editar_funcionario');
        Route::post('/atualizar/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'update'])->name('atualizar_funcionario');

    }
    );
});


Route::get('/usuario/perfil', [App\Http\Controllers\UsuarioController::class, 'create'])->name('perfil')->middleware('auth');
Route::post('/admin/cadastrar/usuario', [App\Http\Controllers\UsuarioController::class, 'store'])->name('salvar_perfil')->middleware('auth');