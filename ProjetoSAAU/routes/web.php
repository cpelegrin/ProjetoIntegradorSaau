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

Route::get('/doacao', function () {
    return view('site/doacao');
})->name('doacao');

Route::get('/adocao', function () {
    return view('site/adocao');
})->name('adocao');

Route::get('/seja-voluntario', function () {
    return view('site/seja-voluntario');
})->name('seja-voluntario');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::put('/admin/noticias/editar/{id}', [App\Http\Controllers\NoticiasController::class, 'update'])->name('noticias.update')->middleware('auth');
Route::get('/admin/noticias/editar/{id}', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('noticias.edit')->middleware('auth');
Route::get('/admin/noticias/remover/{id}', [App\Http\Controllers\NoticiasController::class, 'destroy'])->name('remover.noticias')->middleware('auth');
Route::get('/admin/noticias/lista', [App\Http\Controllers\NoticiasController::class, 'lista'])->name('listanoticias')->middleware('auth');
Route::get('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias')->middleware('auth');
Route::post('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'store'])->name('salvar')->middleware('auth');

Route::put('/admin/noticias/editar/{id}', [App\Http\Controllers\AnimalController::class, 'update'])->name('animal.update')->middleware('auth');
Route::get('/admin/noticias/editar/{id}', [App\Http\Controllers\AnimalController::class, 'edit'])->name('animal.edit')->middleware('auth');
Route::get('/admin/noticias/remover/{id}', [App\Http\Controllers\AnimalController::class, 'destroy'])->name('remover.animal')->middleware('auth');
Route::get('/admin/animal/lista', [App\Http\Controllers\AnimalController::class, 'lista'])->name('listaanimal')->middleware('auth');
Route::get('/admin/animal', [App\Http\Controllers\AnimalController::class, 'index'])->name('animal')->middleware('auth');
Route::post('/admin/animal', [App\Http\Controllers\AnimalController::class, 'store'])->name('salvar')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin/funcionarios')->group(
        function () {
        Route::get('', [App\Http\Controllers\CadastroUsuarioController::class, 'create'])->name('admin/funcionarios');
        Route::post('/cadastrar', [App\Http\Controllers\CadastroUsuarioController::class, 'store'])->name('salvar_funcionario');
        Route::get('/mostrar', [App\Http\Controllers\CadastroUsuarioController::class, 'show'])->name('mostrar_funcionario');
        Route::get('/deletar/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'destroy'])->name('deletar_funcionario');
        Route::get('/edit/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'edit'])->name('editar_funcionario');
        Route::post('/atualizar/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'update'])->name('atualizar_funcionario');
    });    

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin/animal')->group(
        function () {
        Route::get('', [App\Http\Controllers\CadastroAnimalController::class, 'create'])->name('admin/animal');
        Route::post('/cadastrar', [App\Http\Controllers\CadastroAnimalController::class, 'store'])->name('salvar_animal');
        Route::get('/mostrar', [App\Http\Controllers\CadastroAnimalController::class, 'show'])->name('mostrar_animal');
        Route::get('/deletar/{id}', [App\Http\Controllers\CadastroAnimalController::class, 'destroy'])->name('deletar_animal');
        Route::get('/edit/{id}', [App\Http\Controllers\CadastroAnimalController::class, 'edit'])->name('editar_animal');
        Route::post('/atualizar/{id}', [App\Http\Controllers\CadastroAnimalController::class, 'update'])->name('atualizar_animal');
    }}); 

Route::get('/usuario/perfil', [App\Http\Controllers\UsuarioController::class, 'create'])->name('perfil')->middleware('auth');
Route::post('/admin/cadastrar/usuario', [App\Http\Controllers\UsuarioController::class, 'store'])->name('salvar_perfil')->middleware('auth');