<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perfilUsuario;

class UsuarioController extends Controller
{
     public function create(){
        return view('usuarios.perfil');
    }
    
    public function store(Request $request)
    {
        perfilUsuario::create([
            'sobrenome' => $request->sobrenome,
            'endereco' => $request->endereco,
            'profissao' => $request->profissao,
            'telefone' => $request->telefone,
            'sobremim' => $request->sobremim,
            
        ]);
        
        return 's';
    }
}

