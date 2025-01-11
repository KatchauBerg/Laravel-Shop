<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\vendedoresModel;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($vendedores=null)
    {
        //busca vendedores cadastrados banco.
        $vendedores = vendedoresModel::select('id', 'email', 'nome')->orderBy('id', 'desc')->get();

        return view('vendedores.index')->with('vendedores', $vendedores);
    }

    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $id_vendedor = vendedoresModel::find($id);

        return view ('vendedores.edit')->with('id_vendedor', $id_vendedor);
    }

    public function store(Request $request)
    {
        vendedoresModel::firstOrCreate([

            'nome'=>$request->get('txtNome'),
            'email'=>$request->get('txtEmail'),
        ]);

        return to_route('vendedores.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(vendedoresModel $id_vendedor, Request $request)
    {

        vendedoresModel::updateOrCreate(['id' => $request->get('txtVendedor')],['nome'=>$request->get('txtNome'), 'email'=>$request->get('txtEmail')])->save();
        return to_route('vendedores.index')->with('message', "Vendedor '{$id_vendedor->nome}' atualizado com sucesso");
    }

    public function destroy($id)
    {

        vendedoresModel::destroy($id);
        return to_route('vendedores.index');
    }
}
