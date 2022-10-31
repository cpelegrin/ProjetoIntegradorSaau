<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAnimalFormRequest;
use App\Models\Animal;
use App\Models\Animal as ModelsAnimal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('animal.animal');
    }

    public function lista()
    {
        $lista = Animal::get();
        // dd($lista);
        return view('animal.lista', compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**public function store(Request $request)
    {
        $model = new animal();
        if ($request->teste) {
            $data['image'] = $request->teste->store('animal');
        }
        $model->create($data);
        dd(Storage::url($data['image']));
    }//** */

    public function store(StoreUpdateAnimalFormRequest $request)
    {
        $animal = new Animal;
        $animal->titulo = $request->titulo;
        $animal->resumo = $request->resumo;
        $animal->corpo = $request->corpo;
        $animal->image = $request->foto_animal->store('animal');
        ($animal->save());
        return redirect()->route('animal')->with(['success' => 'Animal cadastrado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
