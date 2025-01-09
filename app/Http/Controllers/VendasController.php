<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index(Request $request)
    {

        $series = [

            'arcane',
            'jojo',
            'super mario'
        ];

        return view('vendas.index')->with('series', $series);
    }

    public function create(){

        return view('vendas.create');
    }

    public function store(Request $request){

        $nomeSerie = $request->input('nome');
        return view('vendas.create');
    }
}
