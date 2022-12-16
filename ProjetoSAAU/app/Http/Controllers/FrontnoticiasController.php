<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Noticias;
use App\Models\eventos;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        
       
        $front = DB::table('noticias')->orderBy('updated_at','DESC')->simplePaginate(10);
        return view('site.blog', compact('front'));
    }

    public function show($id)
    {
        $noticia = Noticias::find($id);
            return view('site.artigo-blog', compact('noticia'));
    }

    
}
