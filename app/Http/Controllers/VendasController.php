<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VendaModel;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index(Request $request)
    {

        $vendas = VendaModel::query()->orderBy('id', 'desc')->get();
        return view('vendas.index')->with('vendas', $vendas);
    }

    public function create(){

        return view('vendas.create');
    }

    public function store(Request $request){

        VendaModel::create([

            'nome'=>$request->tituloProduto,
            'email'=>$request->email,
            'valor'=>$request->precoVenda
        ]);
        return to_route('vendas.index');
    }
}
