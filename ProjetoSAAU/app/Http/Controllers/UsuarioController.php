<?php

namespace App\Http\Controllers;


use App\Models\{
    User,
    perfilUsuario
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UsuarioController extends Controller
{
    public function create()
    {
        
        $user = auth()->user();
        $perfil = perfilUsuario::where('user_id', $user->id)->first();
        if ($perfil == null) {
            return view('usuarios.editarPerfil', compact('user',));
        } else {
            return view('usuarios.editarPerfil', compact('user', 'perfil'));
        }
    }
    
    public function store(Request $request, $user_id)
    {
        
        $user = User::find(auth()->user()->id);
        $data['imagem'] = $user->imagem;
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            if ($user->imagem)
            $name = $user->imagem;
            else
            $name = $user->id.($user->name);
            
            $extenstion = $request->imagem->extension();
            $nameFile = "{$name}.{$extenstion}";
            
            $data['imagem'] = $nameFile;
            
            $upload = $request->imagem->storeAs('users', $nameFile);
            
            
        }
        
        $update = $user->update($data);
        
        $perfil = perfilUsuario::where('user_id', $user_id)->first();
        if ($perfil == null) {
            $user = User::find(auth()->user()->id);
            $user->name = $request->nome;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            
            
            
            $user->save();
            
            $perfil = perfilUsuario::create(
                [
                    'user_id' => $user_id,
                    'imagem'=>$request->imagem->storeAs('users', $nameFile),
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
                $user->password = Hash::make($request->password);
                
                
                $user->save();
                $perfil->imagem=$request->imagem->storeAs( 'users',$nameFile);
                $perfil->endereco = $request->endereco;
                $perfil->profissao = $request->profissao;
                $perfil->telefone = $request->telefone;
                $perfil->sobremim = $request->sobremim;
                
                $perfil->save();
            }
            
            
            
            return redirect()->route('perfil', compact('user', 'perfil'));
        }
        public function resetPassword(Request $request, $user_id){
            $user = auth()->user();
           
                $user = User::find(auth()->user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
                
            
            return redirect()->route('perfil');
            
            
        }
        
    }
    
   
