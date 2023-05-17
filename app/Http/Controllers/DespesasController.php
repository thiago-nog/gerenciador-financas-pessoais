<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoDespesa;
use App\Models\Despesa;

class DespesasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $despesas = Despesa::orderBy('data_vencimento', 'asc')->get();

        return view('despesa/index', [
            'despesas' => $despesas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposDespesa = TipoDespesa::orderBy('descricao', 'asc')->get();

        return view('despesa/create', [
            'tiposDespesa' => $tiposDespesa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $despesa = new Despesa;
        $despesa->descricao = $request->descricao;
        $despesa->valor = $request->valor;
        $despesa->data_vencimento = $request->vencimento;
        $despesa->tipo_despesa_id = $request->tipoDespesa;
        $despesa->save();

        return redirect('despesas');
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
