<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use App\Models\eventos;

class FrontnoticiasController extends Controller
{
    public function index()
    {
        $eventos = Eventos::get();
        $noticias = Noticias::orderBy('updated_at', 'DESC')->cursorPaginate(3);
        return view('site.index', compact('noticias', 'eventos'));
    }
    public function index_noticias()
    {
        $front = Noticias::orderBy('updated_at', 'DESC')->get();
        return view('site.blog', compact('front'));
    }

    public function show($id)
    {
        if (!$noticia = Noticias::find($id))
            return redirect()->route('', compact('noticia'));
    }
}
