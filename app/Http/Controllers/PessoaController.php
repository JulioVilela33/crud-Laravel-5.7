<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::latest()->paginate(5);

        return view('pessoas.index',compact('pessoas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'tipo'           => 'required',
            'doc'            => 'required',
            'data'           => 'required',
            'nome_razao'     => 'required',
            'sobre_fantasia' => 'required',
            'cep'            => 'required',
            'logradouro'     => 'required',
            'numero'         => 'required',
            'complemento'    => 'required',
            'bairro'         => 'required',
            'cidade'         => 'required',
            'uf'             => 'required',
        ]);

        Pessoa::create($request->all());

        return redirect()->route('pessoas.index')
                        ->with('sucesso','Registro criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show',compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit',compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        request()->validate([
            'tipo'           => 'required',
            'doc'            => 'required',
            'data'           => 'required',
            'nome_razao'     => 'required',
            'sobre_fantasia' => 'required',
            'cep'            => 'required',
            'logradouro'     => 'required',
            'numero'         => 'required',
            'complemento'    => 'required',
            'bairro'         => 'required',
            'cidade'         => 'required',
            'uf'             => 'required',
        ]);

        $pessoa->update($request->all());

        return redirect()->route('pessoas.index')
                        ->with('sucesso','Registro atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        
        return redirect()->route('pessoas.index')
                        ->with('sucesso','Registo deletado com sucesso');
    }
}
