<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonaController extends Controller
{
    public function Listar(Request $request){
        $respuesta = Http::get(env('API_URL') . '/persona');
        $datos = json_decode($respuesta,true);

        return view('listar',['personas' => $datos]);
    }

    public function Crear(Request $request){
        $respuesta = Http::post( env('API_URL') . '/persona',[
            "nombre" => $request -> post("nombre"),
            "apellido" => $request -> post("apellido"),
            "telefono" => $request -> post("telefono")

        ]);
        $datos = json_decode($respuesta,true);

        return view('crear',['resultado' => $datos]);
    }
}
