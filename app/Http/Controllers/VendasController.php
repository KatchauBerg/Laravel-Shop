<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VendaModel;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index(Request $request)
    {
        //busca dados de vendas no banco de dados
        $vendas = VendaModel::select()->orderBy('id', 'asc')->get();

        return view('vendas.index')->with('vendas', $vendas);
    }

    public function create(){

        return view('vendas.create');
    }

    public function store(Request $request){

        $precoProduto = (float) $request->precoVenda;
        $comissao = (float) 0.085;

        //calcula valor da comissao
        $valorComissao = ((float) $precoProduto * $comissao);

        //calcula preco final do produto
        $precoFinal = ($precoProduto - $valorComissao);

        //salva dados do produto no banco de dados
        VendaModel::create([

            'nome'=>(string) $request->tituloProduto,
            'email'=>(string) $request->email,
            'valor_produto'=>(float) $request->precoVenda,
            'valor_venda'=>(float) $precoFinal,
            'comissao'=>(float) 8.5
        ]);

        return to_route('vendas.index');
    }
}
