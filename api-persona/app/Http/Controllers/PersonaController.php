<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    public function listar()
    {
        $personas = Persona::all();

        if ($personas->isEmpty()) {
            $datos = [
                'mensaje' => 'No hay personas para mostrar',
                'status' => '200',
            ];
            return response()->json($datos, 200);
        }
        return response()->json($personas, 200);
    }

    public function alta(Request $request)
    {
        $persona = Persona::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono
        ]);

        $info = [
            'mensaje' => 'Persona creada exitosamente',
            'status' => 201
        ];
        return response()->json($info, 201);
    }

    public function baja(Request $request, $id)
    {
        $persona = Persona::find($id);

        $persona->delete();

        $datos = [
            'mensaje' => "Persona eliminada",
            'status' => 201
        ];
        return response()->json($datos, 201);
    }

    public function modificar(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;
        $persona->save();
        $datos = [
            'mensaje' => "Persona modificada",
            'status' => 201
        ];
        return response()->json($datos, 201);
    }

    public function buscar($id)
    {
        $persona = Persona::find($id);
        $datos = [
            'persona' => $persona,
            'status' => 200
        ];
        return response()->json($datos, 200);
    }

}




