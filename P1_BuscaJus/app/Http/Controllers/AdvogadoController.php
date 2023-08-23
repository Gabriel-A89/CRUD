<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use Illuminate\Http\Request;


class AdvogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advogados = Advogado::all();
        return view('private.compra', ['advogados' => $advogados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('private.addAdvogado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([         
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'ramo' => 'required',
            'linkImagem' => 'required'
        ]);
    
        Advogado::create($request->all());
     
        return redirect()->route('private.comprar')
                        ->with('success','Advogado criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function show(Advogado $advogado)
    {
        return Advogado::all();
        //$data = Advogado::all();
        //return view('private.show', ['compra' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function edit(Advogado $advogado)
    {
        return view('private.editarAdvogado',compact('private'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advogado $advogado)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'ramo' => 'required',
            'linkImagem' => 'required'
        ]);
    
        $advogado->update($request->all());
    
        return redirect()->route('private.compra')
                        ->with('success','Advogado atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advogado $advogado)
    {
        $advogado->delete();

        return redirect()->route('private.compra')
                        ->with('success','Advogado deletada com sucesso!');
    }
}
