<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroUsuarioController extends Controller
{
    public function create()
    {
        return view('usuarios.cadastroFuncionario');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'permissao' => $request->permissao,
        ]);
        $funcionarios = User::all();
        return view('usuarios.mostrarFuncionario', compact('funcionarios'));
    }

    public function show()
    {
        $funcionarios = User::all();
        return view('usuarios.mostrarFuncionario', compact('funcionarios'));
    }

    public function destroy($id)
    {
        $funcionarios = User::findOrFail($id);
        $funcionarios->delete();
        $funcionarios = User::all();
        return view('usuarios.mostrarFuncionario', compact('funcionarios'));

    }

    public function edit($id)
    {
        $funcionarios = User::findOrFail($id);
        return view('usuarios.editarFuncionario', compact('funcionarios'));
    }

    public function update(Request $request, $id)
    {
        $funcionarios = User::findOrFail($id);
        $funcionarios->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'permissao' => $request->permissao,
        ]);
        $funcionarios = User::all();
        return view('usuarios.mostrarFuncionario', compact('funcionarios'));
    }

}