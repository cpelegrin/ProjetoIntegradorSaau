<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroAnimalController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $animal = Animal::all();
        return view('animal.cadastrarAnimal', compact('user'), compact('animal'));

    }

    public function store(Request $request)
    {
        Animal::create([
            'nome' => $request->nome,
            'sexo'=> $request->sexo,
        ]);
        $animal = Animal::all();
        return view('animal.mostrarAnimal', compact('animal'));
    }

    public function show()
    {
        $animal = Animal::all();
        return view('animal.mostrarAnimal', compact('animal'));
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        $animal = Animal::all();
        return view('animal.mostrarAnimal', compact('animal'));

    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.editarAnimal', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update([
            'name' => $request->name,
        ]);
        $animal = Animal::all();
        return view('animal.mostrarAnimal', compact('animal'));
    }

}
