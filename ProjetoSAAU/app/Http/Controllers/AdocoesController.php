<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adocoes;
use App\Http\Requests\StoreUpdateAdocoesFormRequest;

class AdocoesController extends Controller
{
    public function index()
    {
        return view('adocoes.adocoes');
    }
    public function lista()
    {
        $lista = Adocoes::get();
        return view('adocoes.lista', compact('lista'));
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
    public function store(StoreUpdateAdocoesFormRequest $request)
    {
        $adocoes = new Adocoes;
        $adocoes->nome = $request->nome;
        $adocoes->contato = $request->contato;
        $adocoes->data = $request->data;
        $adocoes->interesse = $request->interesse;
        ($adocoes->save());
        return redirect()->route('listaadocoes')->with(['success' => 'Adoçao cadastrado com sucesso']);
    }

    public function edit($id)
    {

        if (!$adocao = Adocoes::find($id))
            return redirect()->route('/admin/adocoes/lista');

        return view('adocoes.adocoes', compact('adocao'));
    }

    public function update(Request $request, $id)
    {
        if (!$adocao = Adocoes::find($id))
            return redirect()->route('/admin/adocoes/lista');

        $data = $request->all();
        $adocao->update($data);
        return redirect()->route('listaadocoes', ['id' => $id])->with(['success' => 'Adoção editada com sucesso']);
    }

    public function destroy($id)
    {

        if (!$adocao = Adocoes::find($id))
            return redirect()->route('listaadocoes');
        $adocao->delete();
        return redirect()->route('listaadocoes')->with(['success' => 'Adoção removida com sucesso']);
    }
}
