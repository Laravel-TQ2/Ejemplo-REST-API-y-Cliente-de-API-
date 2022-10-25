<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function Alta(Request $request){
        $p = new Persona();
        $p -> nombre = $request -> post("nombre");
        $p -> apellido = $request -> post("apellido");
        $p -> telefono = $request -> post("telefono");

        $p -> save();

        return [ 
            "creado" => true,
            "mensaje" => "Usuario Creado con exito",
            "datos" => $p
        ];

    }
    public function Listar(Request $request){
        $p = Persona::all();
        return $p;
    }

    public function Buscar(Request $request, $id){

        try {
            $p = Persona::findOrFail($id)->toJson();
            return $p;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'status' => 'ERROR',
                'error' => '404 not found'
            ], 404);
}
    }

}
