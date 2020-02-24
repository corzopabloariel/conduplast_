<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contenido;
use App\Empresa;
class ContenidoController extends Controller
{
    public $model,$seccion;
    public function __construct() {
        $this->model = new Contenido;
        $this->seccion = Empresa::first()->sections[0];
    }
    public function edit( $section ) {
        $contenido = $this->model->where( "section" , $section )->first();

        $OBJ = [
            "section" => $section,
            "data" => null
        ];
        if( empty( $contenido ) ) {
            $OBJ["data"] = [];
            $contenido = $this->model->create( $OBJ );
        }
        $data = [
            "view" => "auth.parts.contenidos.{$section}",
            "title" => "Contenido: " . strtoupper( $this->seccion[ $section ][ "NAME" ] ),
            "elementos" => $contenido,
            "section" => $section,
        ];
        return view( 'auth.distribuidor' , compact( 'data' ) );
    }

    public function update( Request $request , $section ) {
        $datosRequest = $request->all();

        //try {
            $contenido = $this->model->where('section',$section)->first();
            if( empty( $contenido ) ) {
                $contenido = $this->model->create(
                    [
                        "section" => "{$section}",
                        "data" => []
                    ]
                );
            }
            $OBJ = (new AdmController)->object( $request , $contenido[ "data" ] );
            //dd($OBJ);
            $contenido->fill( [ "data" => $OBJ] );
            $contenido->save();
            //dd($contenido);
            echo 1;
        /*} catch (\Throwable $th) {
            return 0;
        }*/
    }
}
