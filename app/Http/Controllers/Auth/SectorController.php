<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Empresa;
use App\Sector;
class SectorController extends Controller
{
    public $model,$seccion;
    public function __construct() {
        $this->model = new Sector;
        $this->seccion = Empresa::first()->sections[0];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = $this->model->where( 'elim' , 0 )->orderBy( 'order' )->get();
        $productos = Producto::where( "elim" , 0 )->orderBy( 'order' )->pluck( "text" , "id" );
        $data = [
            "view"      => "auth.parts.sectores",
            "title"     => "Sectores",
            "elementos"   => $sectores,
            "productos" => $productos,
            "buttons" => [
                [ "i" => "fas fa-pencil-alt" , "b" => "btn-warning" , "t" => "Editar" ],
                [ "i" => "fas fa-trash-alt" , "b" => "btn-danger" , "t" => "Eliminar" ]
            ],
        ];
        return view('auth.distribuidor',compact('data'));
    }

    public function show() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $data = null)
    {
        (new AdmController)->store( $this->model , $request , $data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->model->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = self::edit($id);
        return self::store($request,$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        (new AdmController)->destroy( $this->model , $request );
    }
}
