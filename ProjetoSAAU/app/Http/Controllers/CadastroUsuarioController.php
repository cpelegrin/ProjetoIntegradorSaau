<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;


class CadastroUsuarioController extends Controller
{
    public function create()
    {

        return view('usuarios.cadastrarFuncionario');
    }

    public function store(UserStoreRequest $request)
    {
        if (User::where("email", $request->email)->count() > 0) {

            return redirect()->back()->withErrors(['error' => 'Email já cadastrado']);
        }
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'permissao' => $request->permissao,
            ]
        );
        $funcionarios = User::all();

        return redirect()->route('mostrar_funcionario', compact('funcionarios'))->with(['success' => 'Funcionário cadastrado com sucesso']);

    }

    public function show()
    {
        $funcionarios = User::all();
        return view('usuarios.mostrarFuncionario', compact('funcionarios'));
    }

    public function destroy($id)
    {
        $funcionarios = User::findOrFail($id);
        if ($funcionarios->id == 1) {
            return redirect()->route('mostrar_funcionario')->withErrors(['error' => 'Não é possível deletar a conta de um Administrador ']);
        } else {
            dd("teste");
            $funcionarios->delete();
            $funcionarios = User::all();
            return redirect()->route('mostrar_funcionario', compact('funcionarios'))->with(['success' => 'Funcionário excluido com sucesso']);

        }

    }
    public function destroyUsuario($id)
    {

        if (auth()->user()->id == 1) {
            return redirect()->route('perfil')->withErrors(['error' => 'Não é possível deletar a conta de um Administrador ']);
        } else {
            $funcionarios = User::findOrFail($id);
            $funcionarios->delete();
            return redirect()->route('inicio');
        }


    }



    public function edit($id)
    {
        $funcionarios = User::findOrFail($id);
        return view('usuarios.cadastrarFuncionario', compact('funcionarios'));

    }

    public function update(UserStoreRequest $request, $id)
    {
        $funcionarios = User::findOrFail($id);
        $funcionarios->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'permissao' => $request->permissao,
            ]
        );
        $funcionarios = User::all();

        return redirect()->route('mostrar_funcionario', compact('funcionarios'))->with(['success' => 'Funcionário editado com sucesso']);

    }



}