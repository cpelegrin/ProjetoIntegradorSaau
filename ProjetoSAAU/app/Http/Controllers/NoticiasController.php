<?php

namespace App\Http\Controllers;

use App\Models\noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.noticias');
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
        $model = new noticias();
        if ($request->teste) {
            $data['image'] = $request->teste->store('noticias');
        }
        $model->create($data);
        dd(Storage::url($data['image']));
    }//** */

    public function store(Request $request)
    {
        $noticia = new Noticias;
        $noticia->titulo = $request->get('titulo');
        $noticia->resumo = $request->get('resumo');
        $noticia->corpo = $request->get('corpo');
        $noticia->image = $request->get('foto_noticia');
        $noticia->save();
        return redirect()->route('/admin/noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit(noticias $noticias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticias $noticias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticias $noticias)
    {
        //
    }
}
