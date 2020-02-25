<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contenido;
use App\Slider;
use App\Empresa;
use App\Sector;
use App\Categoria;
use App\Producto;
class GeneralController extends Controller
{
    public function __construct()
    {
    }

    public function datos($link = null)
    {
        $datos = Empresa::first();
        $whatsapp = $telefono = $telefonoHeader = [];
        if (empty($link))
            $link = "p1";

        for ($i = 0; $i < count($datos->phone); $i++) {
            if( !empty( $datos->phone[$i]["is_header" ] ) ) {
                if( !isset( $telefonoHeader[ $datos->phone[$i]["tipo"] ] ) )
                    $telefonoHeader[ $datos->phone[$i]["tipo"] ] = [];
                $telefonoHeader[ $datos->phone[$i]["tipo"] ][] = $datos->phone[$i];
            }
            if ($datos->phone[$i]["tipo"] == "wha")
                $whatsapp[] = $datos->phone[$i];
            else
                $telefono[] = $datos->phone[$i];
        }
        $data = [
            "empresa" => $datos,
            "whatsapp" => $whatsapp,
            "telefono" => $telefono,
            "telefonoHeader" => $telefonoHeader,
            "contenido" => Contenido::where("section", $link)->first(),
            "slider" => Slider::where("section", $link)->where("elim", 0)->orderBy("order")->get(),
            "terminos" => Contenido::where("section", "terminos")->first(),
            "metadato" => [
                "description" => "",
                "keywords" => ""
            ],
            "view" => "page.{$link}",
            "title" => isset($datos->sections[ 0 ][$link]) ? $datos->sections[ 0 ][$link]["NAME"] : $datos->sections[ 0 ]["p1"]["NAME"]
        ];
        if (isset($datos->metadata[$link]))
            $data["metadato"] = $datos->metadata[$link];
        return $data;
    }

    public function index($link = null)
    {
        if (empty($link))
            $link = "p1";
        else {
            foreach( Empresa::first()->sections[0] AS $k => $dd ) {
                if( $dd[ "LINK" ] == $link ) {
                    $link = $k;
                    break;
                }
            }
        }
        $data = self::datos($link);
        switch ($link) {
            case "p1":
                //$data[ "familias" ] = Familia::where( "elim" , 0 )->whereNull( "familia_id" )->whereNotNull( "image" )->orderBy( "order" )->get();
                break;
            case "p3":
                $data[ "categorias" ] = Categoria::where( "elim" , 0 )->orderBy( "order" )->get();
                break;
            case "p5":
                $data[ "sectores" ] = Sector::where( "elim" , 0 )->orderBy( "order" )->get();
        }

        return view('layouts.main', compact('data'));
    }

    public function search( Request $request )
    {
        $dataRequest = $request->all();
        $data = self::datos("p3");
        $data[ "search" ] = $dataRequest[ "search" ];
        $data[ "productos" ] = Producto::where( "title" , "LIKE" , "%{$data[ 'search' ]}%")->orWhere( "text" , "LIKE" , "%{$data[ 'search' ]}%")->orWhere( "models" , "LIKE" , "%{$data[ 'search' ]}%")->orWhere( "details" , "LIKE" , "%{$data[ 'search' ]}%")->paginate( 15 );
        $data[ "view" ] = "page.search";

        return view('layouts.main', compact('data'));

    }

    public function contacto( $link , $id )
    {
        $elemento = Producto::find( $id );
        $data = self::datos("p8");
        $data[ "producto" ] = $elemento;
        return view('layouts.main', compact('data'));
    }

    public function sector( $link , $id )
    {
        $elemento = Sector::find( $id );
        $data = self::datos("p5");
        $data[ "view" ] = "page.sector";
        $data[ "elemento" ] = $elemento;
        return view('layouts.main', compact('data'));
    }

    public function categoria( $link , $id )
    {
        $data = self::datos("p3");
        $data[ "categoria" ] = Categoria::find( $id );
        $data[ "productos" ] = $data[ "categoria" ]->productos()->orderBy( "order" )->paginate( 15 );
        $data[ "categorias" ] = Categoria::where( "elim" , 0 )->orderBy( "order" )->get();
        $data[ "view" ] = "page.categoria";

        return view('layouts.main', compact('data'));
    }

    public function producto( $link , $link2 , $id )
    {
        $data = self::datos("p3");
        $data[ "producto" ] = Producto::find( $id );
        $data[ "categoria" ] = $data[ "producto" ]->categoria;
        $data[ "categorias" ] = Categoria::where( "elim" , 0 )->orderBy( "order" )->get();
        $data[ "view" ] = "page.producto";

        return view('layouts.main', compact('data'));
    }
}
