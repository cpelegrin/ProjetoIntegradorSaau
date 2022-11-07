<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;

class FrontnoticiasController extends Controller
{
    public function index()
    {
        $front = Noticias::get();
        dd($front);
        return view('site.blog', compact('front'));
    }
}
