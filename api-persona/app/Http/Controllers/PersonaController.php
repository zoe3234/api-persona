<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    public function listar(){
        $personas = Persona::all();

        if($personas->isEmpty()){
            $datos =[
                'mensaje' => 'No hay personas para mostrar',
                'status'=> '200',
            ];
            return response()->json($datos,200);
        }
        return response()->json($personas,200);
    }

    
}
