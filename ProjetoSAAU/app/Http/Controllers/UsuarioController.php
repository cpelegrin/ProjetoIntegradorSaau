<?php

namespace App\Http\Controllers;


use App\Models\{
    User,
    perfilUsuario
};
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {

        $user = auth()->user();
        return view('usuarios.editarPerfil', compact('user'));
    }

    public function store(Request $request, $user_id)
    {
        perfilUsuario::create([
            'user_id' => $user_id,
            'endereco' => $request->endereco,
            'profissao' => $request->profissao,
            'telefone' => $request->telefone,
            'sobremim' => $request->sobremim,

        ]);
        $user = auth()->user();
        return view('usuarios.editarPerfil', compact('user'));
    }
}