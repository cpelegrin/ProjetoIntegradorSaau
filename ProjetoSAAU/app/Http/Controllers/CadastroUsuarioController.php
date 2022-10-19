<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroUsuarioController extends Controller
{
    public function Usuario()
    {
        return view('CadastroUsuario');
    }
    public function create(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'permissao' => $request->permissao,
        ]);

        return 'Foi salvo com sucesso';
    }

    public function show()
    {
        $pessoa = User::all();
        return view('mostrarPessoa', compact('pessoa'));
    }

    public function delete($id)
    {
        $pessoa = User::findOrFail($id);
        $pessoa->delete();

        return 'deletado com sucesso ';



    }

    public function edit($id)
    {
        $pessoa = User::findOrFail($id);
        return view('editarPessoa', compact('pessoa'));


    }

    public function update(Request $request, $id)
    {
        $pessoa = User::findOrFail($id);
        $pessoa->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
        ]);

        return 'Cadastro atualizado com sucesso';
    }



}