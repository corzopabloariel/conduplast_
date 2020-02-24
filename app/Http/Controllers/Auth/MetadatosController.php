<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;
class MetadatosController extends Controller
{
    public function index()
    {
        $title = "Empresa :: Metadatos";
        $seccion = "metadatos";
        $datos = Empresa::first();
        if( count( $datos[ "metadata" ] ) == 0 ) {
            $aux = [ "description" => null , "keywords" => null ];
            $ARR = [];
            $ARR[ "p1" ] = $aux;
            $ARR[ "p2" ] = $aux;
            $ARR[ "p3" ] = $aux;
            $ARR[ "p4" ] = $aux;
            $ARR[ "p5" ] = $aux;
            $ARR[ "p6" ] = $aux;
            $ARR[ "p7" ] = $aux;
            $ARR[ "p8" ] = $aux;
            $datos->fill( [ "metadata" => $ARR ] );
            $datos = $datos->save();
        }
        $data = [
            "title"     => "Empresa :: Metadatos",
            "view"      => "auth.parts.empresaMetadatos",
            "elementos" => $datos->metadata,
            "buttons" => [
                [ "i" => "fas fa-pencil-alt" , "b" => "btn-warning" , "t" => "Editar" ]
            ],
        ];
        return view('auth.distribuidor',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $seccion = null, $data = null)
    {
        try {
            $metadatos = $data->metadata;
            $metadatos[ $seccion ] = (new AdmController)->object( $request , $metadatos[ $seccion ] );
            //dd($metadatos);
            $data->fill( [ "metadata" => $metadatos ] );
            $data->save();
            return 1;
        } catch (\Throwable $th) {
            echo 0;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $seccion)
    {
        $metadatos = Empresa::first();
        return self::store($request,$seccion,$metadatos);
    }
}
