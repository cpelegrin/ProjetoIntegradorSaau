<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontnoticiasController extends Controller
{
    public function index()
    {
        $front = Noticias::get();
        return view('site/blog');
    }
}
