<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;

class FrontnoticiasController extends Controller
{
    public function index()
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
