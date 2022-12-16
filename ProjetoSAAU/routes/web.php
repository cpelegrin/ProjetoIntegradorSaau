<?php

use App\Http\Controllers\NoticiasController;
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

Route::get('/', [App\Http\Controllers\FrontnoticiasController::class, 'index'])->name('inicio');

Route::get('/contato', function () {
    return view('site/contato');
})->name('contato');

Route::get('/sobre-nos', function () {
    return view('site/sobre-nos');
})->name('sobre-nos');

Route::get('/artigo-blog', function () {
    return view('site.artigo-blog');
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

Route::get('/blog', [App\Http\Controllers\FrontnoticiasController::class, 'index_noticias'])->name('front.noticias');
Route::get('/blog/noticias/{id}', [App\Http\Controllers\FrontnoticiasController::class, 'show'])->name('mostrar_noticia');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

// rotas de noticias
Route::put('/admin/noticias/{id}', [App\Http\Controllers\NoticiasController::class, 'update'])->name('noticias.update')->middleware('auth');
Route::get('/admin/noticias/editar/{id}', [App\Http\Controllers\NoticiasController::class, 'edit'])->name('noticias.edit')->middleware('auth');
Route::put('/admin/noticias/remover/{id}', [App\Http\Controllers\NoticiasController::class, 'destroy'])->name('remover.noticias')->middleware('auth');
Route::get('/admin/noticias/lista', [App\Http\Controllers\NoticiasController::class, 'lista'])->name('listanoticias')->middleware('auth');
Route::get('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias')->middleware('auth');
Route::post('/admin/noticias', [App\Http\Controllers\NoticiasController::class, 'store'])->name('salvar_noticia')->middleware('auth');

// rotas de eventos
Route::get('/admin/eventos', [App\Http\Controllers\EventosController::class, 'index'])->name('eventos')->middleware('auth');
Route::put('/admin/eventos/{id}', [App\Http\Controllers\EventosController::class, 'update'])->name('eventos.update')->middleware('auth');
Route::get('/admin/eventos/editar/{id}', [App\Http\Controllers\EventosController::class, 'edit'])->name('eventos.edit')->middleware('auth');
Route::put('/admin/eventos/remover/{id}', [App\Http\Controllers\EventosController::class, 'destroy'])->name('remover.eventos')->middleware('auth');
Route::get('/admin/eventos/lista', [App\Http\Controllers\EventosController::class, 'lista'])->name('listaeventos')->middleware('auth');
Route::post('/admin/eventos', [App\Http\Controllers\EventosController::class, 'store'])->name('salvar_evento')->middleware('auth');

// rotas de adoções 
Route::get('/admin/adocoes', [App\Http\Controllers\AdocoesController::class, 'index'])->name('adocoes')->middleware('auth');
Route::put('/admin/adocoes/{id}', [App\Http\Controllers\AdocoesController::class, 'update'])->name('adocoes.update')->middleware('auth');
Route::get('/admin/adocoes/editar/{id}', [App\Http\Controllers\AdocoesController::class, 'edit'])->name('adocoes.edit')->middleware('auth');
Route::put('/admin/adocoes/remover/{id}', [App\Http\Controllers\AdocoesController::class, 'destroy'])->name('remover.adocoes')->middleware('auth');
Route::get('/admin/adocoes/lista', [App\Http\Controllers\AdocoesController::class, 'lista'])->name('listaadocoes')->middleware('auth');
Route::post('/admin/adocoes', [App\Http\Controllers\AdocoesController::class, 'store'])->name('salvar_adocao')->middleware('auth');

// rotas de Cadastro de Funcionario
Route::middleware(['auth'])->group(
    function () {
        Route::prefix('/admin/funcionarios')->group(
            function () {
                    Route::get('', [App\Http\Controllers\CadastroUsuarioController::class, 'create'])->name('admin/funcionarios');
                    Route::post('/cadastrar', [App\Http\Controllers\CadastroUsuarioController::class, 'store'])->name('salvar_funcionario');
                    Route::get('/mostrar', [App\Http\Controllers\CadastroUsuarioController::class, 'show'])->name('mostrar_funcionario');
                    Route::post('/deletar/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'destroy'])->name('deletar_funcionario');
                    Route::get('/deletar/usuario/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'destroyUsuario'])->name('deletar_usuario');
                    Route::get('/edit/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'edit'])->name('editar_funcionario');
                    Route::post('/atualizar/{id}', [App\Http\Controllers\CadastroUsuarioController::class, 'update'])->name('atualizar_funcionario');
                }
        );
    }
);

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin/animal')->group(
        function () {
            Route::get('', [App\Http\Controllers\CadastroAnimalController::class, 'create'])->name('admin/animal');
            Route::post('/cadastrar', [App\Http\Controllers\CadastroAnimalController::class, 'store'])->name('salvar_animal');
            Route::get('/mostrar', [App\Http\Controllers\CadastroAnimalController::class, 'show'])->name('mostrar_animal');
            Route::get('/deletar/{id}', [App\Http\Controllers\CadastroAnimalController::class, 'destroy'])->name('deletar_animal');
            Route::get('/edit/{id}', [App\Http\Controllers\CadastroAnimalController::class, 'edit'])->name('editar_animal');
            Route::put('/atualizar/{id}', [App\Http\Controllers\CadastroAnimalController::class, 'update'])->name('atualizar_animal');
        }
    );
});

// rotas de perfil
Route::get('admin/usuario', [App\Http\Controllers\UsuarioController::class, 'index'])->name('mostrar_usuario');
Route::get('/usuario/perfil', [App\Http\Controllers\UsuarioController::class, 'create'])->name('perfil')->middleware('auth');
Route::post('/admin/cadastrar/usuario/{user_id}', [App\Http\Controllers\UsuarioController::class, 'store'])->name('salvar_perfil')->middleware('auth');
Route::post('/admin/resetPassword/{user_id}', [App\Http\Controllers\UsuarioController::class, 'resetPassword'])->name('resetar_senha')->middleware('auth');
Route::get('admin/mostrar/perfil/{id}', [App\Http\Controllers\UsuarioController::class, 'mostrarPerfil'])->name('mostrar_perfil')->middleware('auth');



Route::post('denuncia/contato',[App\Http\Controllers\ContactController::class, 'store'])->name('criar_contato');
Route::get('mostrar/denuncia/{id}',[App\Http\Controllers\ContactController::class, 'show'])->name('mostrar_contato');

//Route::get('/contact', 'ContactController@contact')->name('contact');
//Route::post('/contact', 'ContactController@contactPost')->name('contactPost');


//Route::get('contact', 'SendEmailController@getContact');
//Route::post('contact', 'SendEmailController@postContact');

//Route::post('/sendemail/send','SendEmailController@send');

//Route::post('/registerCreate', [App\Http\Controllers\Auth\SendEmailController::class, 'create'])->name('register.create');

//Route::post('/registerStore', [App\Http\Controllers\Auth\SendEmailController::class, 'store'])->name('register.store.usu');