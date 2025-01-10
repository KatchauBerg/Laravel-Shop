<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\vendedoresModel;
use Illuminate\Http\Request;

class EntrarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //busca vendedores cadastrados banco.
        $vendedores = vendedoresModel::query()->orderBy('id', 'desc')->get();

        return view('vendedores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('vendedores.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        vendedoresModel::firstOrCreate([

            'nome'=>$request->get('txtNome'),
            'email'=>$request->get('txtEmail'),
        ]);

        return view('vendedores.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
