<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroAnimalController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $animal = User::all();
        return view('usuarios.cadastrarAnimal', compact('user'), compact('animal'));

    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
        ]);
        $animal = User::all();
        return view('usuarios.mostrarAnimal', compact('animal'));
    }

    public function show()
    {
        $animal = User::all();
        return view('usuarios.mostrarAnimal', compact('animal'));
    }

    public function destroy($id)
    {
        $animal = User::findOrFail($id);
        $animal->delete();
        $animal = User::all();
        return view('usuarios.mostrarAnimal', compact('animal'));

    }

    public function edit($id)
    {
        $animal = User::findOrFail($id);
        return view('usuarios.editarAnimal', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = User::findOrFail($id);
        $animal->update([
            'name' => $request->name,
        ]);
        $animal = User::all();
        return view('usuarios.mostrarAnimal', compact('animal'));
    }

}