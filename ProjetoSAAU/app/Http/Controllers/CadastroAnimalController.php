<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAnimalFormRequest;
use App\Models\animals;

class CadastroAnimalController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $animal = animals::all();
        return view('animal.cadastrarAnimal', compact('user'), compact('animal'));
    }

    public function store(StoreUpdateAnimalFormRequest $request)
    {
        $animal = new animals();
        $animal->nome = $request->nome;
        $animal->sexo = $request->sexo;
        $animal->prontuario = $request->prontuario;
        $animal->image = $request->foto_animal->store('animal');
        ($animal->save());
        return redirect()->route("mostrar_animal");
    }

    public function show()
    {
        $animais = animals::all();
        return view('animal.mostrarAnimal', compact('animais'));
    }

    public function destroy($id)
    {
        $animal = animals::findOrFail($id);
        $animal->delete();
        $animal = animals::all();
        return view('animal.mostrarAnimal', compact('animal'));
    }

    public function edit($id)
    {
        $animal = animals::findOrFail($id);
        return view('animal.editarAnimal', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = animals::findOrFail($id);
        $animal->update([
            'name' => $request->name,
        ]);
        $animal = animals::all();
        return view('animal.mostrarAnimal', compact('animal'));
    }
}
