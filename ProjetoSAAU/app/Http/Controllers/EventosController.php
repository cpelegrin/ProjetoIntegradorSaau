<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;
use App\Http\Requests\StoreUpdateEventosFormRequest;

class EventosController extends Controller
{
    public function index()
    {
        return view('eventos.eventos');
    }
    public function lista()
    {
        $lista = Eventos::get();
        return view('eventos.lista', compact('lista'));
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
    public function store(StoreUpdateEventosFormRequest $request)
    {
        $evento = new Eventos;
        $evento->titulo = $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->data = $request->descricao;
        $evento->local = $request->local;
        ($evento->save());
        return redirect()->route('listaeventos')->with(['success' => 'Evento cadastrado com sucesso']);
    }

    public function edit($id)
    {

        if (!$evento = Eventos::find($id))
            return redirect()->route('/admin/eventos/lista');

        return view('eventos.eventos', compact('evento'));
    }
 
    public function update(Request $request, $id)
    {
        if (!$evento = Eventos::find($id))
            return redirect()->route('/admin/eventos/lista');

        $data = $request->all();
        $evento->update($data);
        return redirect()->route('listaeventos', ['id' => $id])->with(['success' => 'Evento editado com sucesso']);
    }

    public function destroy($id)
    {

        if (!$evento = Eventos::find($id))
            return redirect()->route('listaeventos');
        $evento->delete();
        return redirect()->route('listaeventos')->with(['success' => 'Evento removido com sucesso']);
    }
}


