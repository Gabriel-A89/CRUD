<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advogado;

class CompraController extends Controller
{
    public function show()
    {        
        $data = Advogado::all();
        return view('private.compra', ['compra' => $data]);
    }
    
    public function delete($id)
    {        
        $data = Advogado::find($id);
        $data->delete();
        return redirect('compra');
    }
    
    public function add(Request $req)
    {        
        $advogado = new Advogado;
        $advogado->id = $req->id;
        $advogado->nome = $req->nome . ' ' . $req->sobrenome;
        $advogado->email = $req->email;
        $advogado->telefone = $req->celular;
        $advogado->ramo = $req->ramo;
        $advogado->linkImagem = $req->linkImg;
        $advogado->save();
        return redirect('compra');
    }

    public function showData($id){
        $data = Advogado::find($id);
        return view('private.formAdd2', ['data'=>$data]);
    }

    public function update(Request $req){
        $data = Advogado::find($req->id);
        $data->nome = $req->nome;
        $data->email = $req->email;
        $data->telefone = $req->celular;
        $data->ramo = $req->ramo;
        $data->linkImagem = $req->linkImg;
        $data->save();
        return redirect('compra');
    }
}
