<?php

namespace App\Http\Controllers;

use App\Models\Tabulador;
use Illuminate\Http\Request;

class TabuladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabulador = Tabulador::all();

        return view ('tabulador', compact('tabulador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cadastro');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'nome' => 'required',
            'idade' => 'required',
            'cep' => 'required',            
            'endereco' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'teste' => 'required',
        ]);
        
        Tabulador::create($request->all());
        return redirect()->route('cadastro.index')
        ->with('success', 'Cadastro Realizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabulador  $tabulador
     * @return \Illuminate\Http\Response
     */
    public function show(Tabulador $tabulador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabulador  $tabulador
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabulador $tabulador)
    {
        return view('edicao', compact('tabulador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabulador  $tabulador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabulador $tabulador)
    {
        $request->validate([
            'nome' => 'required',
            'idade' => 'required',
            'cep' => 'required',            
            'endereco' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'teste' => 'required',
        ]);
        
        Tabulador::update($request->all());
        return redirect()->route('cadastro.index')
        ->with('success', 'Cadastro Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabulador  $tabulador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabulador $tabulador)
    {
        $tabulador->delete();

        return redirect()->route('cadastro.index')
        ->with('success', 'Cadastro Excluído');
    }
}
