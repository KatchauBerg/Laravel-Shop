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
    public function index()
    {
        //busca vendedores cadastrados banco.
        $vendedores = vendedoresModel::select('id', 'nome', 'email')->orderBy('id', 'asc')->get();

        return view('vendedores.lista')->with('vendedores', $vendedores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function edit(vendedoresModel $id_vendedor)
    {

        return view ('vendedores.atualiza')->with('id_vendedor', $id_vendedor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(vendedoresModel $id_vendedor, Request $request)
    {

//        $id_vendedor->nome = $request->nome;
//        $id_vendedor->email = $request->nome;

        $id_vendedor->fill($request->all());
        $id_vendedor->save();

        return to_route('vendedores.index')->with('message', 'Vendedor atualizado com sucesso!', "Vendedor '{$id_vendedor->nome}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        vendedoresModel::destroy($request->id);
        return to_route('vendedores.lista');
    }
}
