<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perfilUsuario;

class UsuarioController extends Controller
{
    public function create()
    {
        //todo buscar userautenticado e enviar para view
        return view('usuarios.editarPerfil');
    }

    public function store(Request $request)
    {
        perfilUsuario::create([

            'endereco' => $request->endereco,
            'profissao' => $request->profissao,
            'telefone' => $request->telefone,
            'sobremim' => $request->sobremim,

        ]);

        return '';
    }
}