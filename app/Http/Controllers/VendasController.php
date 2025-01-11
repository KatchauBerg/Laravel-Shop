<?php

namespace App\Http\Controllers;

use App\Events\EnviaRelatorio;
use App\Http\Controllers\Controller;
use App\Mail\relatorioEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\VendaModel;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index()
    {
        //busca dados de vendas no banco de dados
        $vendas = VendaModel::query()->orderBy('id')->get();

       foreach ($vendas as $venda) {

           $defineTempoAtual = now()->format('Y-m-d');
           $buscarVendas = (new VendaModel())->buscaValorTotalVendas($venda->email, $defineTempoAtual);

            EnviaRelatorio::dispatch($buscarVendas, $venda->email);
       }

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
