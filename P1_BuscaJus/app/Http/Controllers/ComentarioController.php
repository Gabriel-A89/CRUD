<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function comentario()
    {        
        return view('private.comentario');
    }
}
