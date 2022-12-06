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
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'permissao' => $request->permissao,
                ]
            );
            $funcionarios = User::all();
            return view('usuarios.mostrarFuncionario', compact('funcionarios')); //FIXME alterar para redirect route
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
            ;
            return redirect()->route('mostrar_funcionario', compact('funcionarios'))->with(['success' => 'Funcionário excluido com sucesso']);
            
        }
        public function destroyUsuario($id)
        {
          
                $funcionarios = User::findOrFail($id);
                $funcionarios->delete();
                return redirect()->route('inicio');
            
        }
        
        
        
        public function edit($id)
        {
            $funcionarios = User::findOrFail($id);
            return redirect()->route('editar_funcionario', compact('funcionarios'));
            
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

        