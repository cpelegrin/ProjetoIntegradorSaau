<?php

namespace App\Http\Controllers;

use App\Models\Noticias;

class FrontnoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticias::get();
        return view('site.index', compact('noticias'));
    }
    public function index_noticias()
    {
        $front = Noticias::get();
        return view('site.blog', compact('front'));
    }

    public function show($id)
    {
        if (!$noticia = Noticias::find($id))
            return redirect()->route('', compact('noticia'));
    }
}
