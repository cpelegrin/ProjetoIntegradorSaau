<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAnimalFormRequest;
use App\Models\animals;

class CadastroAnimalController extends Controller
{
    public function create()
    {
        return view('animal.cadastrarAnimal');
    }

    public function store(StoreUpdateAnimalFormRequest $request)
    {
        $animal = new animals();
        $animal->nome = $request->nome;
        $animal->sexo = $request->sexo;
        $animal->status = $request->status;
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
        if (!$animal = animals::find($id))
            return redirect()->route('/admin/animal/mostrar');
        return view('animal.cadastrarAnimal', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        if (!$animal = animals::find($id))
            return redirect()->route('/admin/animal/mostrar');

        $data = $request->all();
        if (isset($request->foto_animal))
            $animal->image = $request->foto_animal->store('animal');
        $animal->update($data);
        return redirect()->route('mostrar_animal', ['id' => $id])->with(['success' => 'Animal atualizado com sucesso']);
    }
}
