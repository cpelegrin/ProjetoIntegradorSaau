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
        $perfil = perfilUsuario::where('user_id', $user->id)->first();
        if ($perfil == null) {
            return view('usuarios.editarPerfil', compact('user'));
        } else {
            return view('usuarios.editarPerfil', compact('user', 'perfil'));
        }
    }

    public function store(Request $request, $user_id)
    {
        $perfil = perfilUsuario::where('user_id', $user_id)->first();
        if ($perfil == null) {
            $user = User::find(auth()->user()->id);
            $user->name = $request->nome;
            $user->email = $request->email;


            $user->save();

            $perfil = perfilUsuario::create(
                [
                    'user_id' => $user_id,
                    'img' => $request->foto_perfil->store('perfil_usuarios'),
                    'endereco' => $request->endereco,
                    'profissao' => $request->profissao,
                    'telefone' => $request->telefone,
                    'sobremim' => $request->sobremim,
                ]
            );

        } else {
            $user = User::find(auth()->user()->id);
            $user->name = $request->nome;
            $user->email = $request->email;


            $user->save();
            $perfil->foto_perfil = $request->foto_perfil->store('perfil_usuarios');
            $perfil->endereco = $request->endereco;
            $perfil->profissao = $request->profissao;
            $perfil->telefone = $request->telefone;
            $perfil->sobremim = $request->sobremim;

            $perfil->save();
        }


        return redirect()->route('perfil', compact('user', 'perfil'));
    }
}