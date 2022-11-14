<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateNoticiaFormRequest;
use App\Models\Noticias;
use App\Models\Noticias as ModelsNoticias;
use GrahamCampbell\ResultType\Success;
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
        return view('noticias.noticias');
    }

    public function lista()
    {
        $lista = Noticias::get();
        // dd($lista);
        return view('noticias.lista', compact('lista'));
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

    public function store(StoreUpdateNoticiaFormRequest $request)
    {
        $noticia = new Noticias;
        $noticia->titulo = $request->titulo;
        $noticia->resumo = $request->resumo;
        $noticia->corpo = $request->corpo;
        $noticia->image = $request->foto_noticia->store('noticias');
        ($noticia->save());
        return redirect()->route('listanoticias')->with(['success' => 'Notícia cadastrada com sucesso']);
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
    public function edit($id)
    {

        if (!$noticia = Noticias::find($id))
            return redirect()->route('/admin/noticias/lista');

        return view('noticias.noticias', compact('noticia'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        if (!$noticia = Noticias::find($id))
            return redirect()->route('/admin/noticias/lista');

        $data = $request->all();
        $noticia->update($data);
        return redirect()->route('listanoticias', ['id' => $id])->with(['success' => 'Notícia editada com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        if (!$noticia = Noticias::find($id))
            return redirect()->route('listanoticias');
        $noticia->delete();
        return redirect()->route('listanoticias')->with(['success' => 'Notícia removida com sucesso']);
    }

    public function remover(request $request, $id)
    {
        return view('noticias.remover');
    }

    public function delete(request $request, $id)
    {
        return view('mostrarfuncionario.deletar');
    }
}
