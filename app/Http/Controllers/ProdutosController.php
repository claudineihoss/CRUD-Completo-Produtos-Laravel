<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produto.index');
    }

    public function create()
    {

        return view('produto.create');
    }

    public function show($nome, $valor)
    {

    return view('produto.show');
    }
}
