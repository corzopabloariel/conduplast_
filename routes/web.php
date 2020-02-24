<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes( [ 'register' => false , 'verify' => false , 'reset' => false ] );

Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function() {
    Route::get('/', 'Auth\AdmController@index')->name('adm');
    Route::get('logout', ['uses' => 'Auth\LoginController@logout' , 'as' => 'adm.logout']);
    Route::get('elim', ['uses' => 'Auth\AdmController@elim', 'as' => 'elim']);
    Route::get('empresa/imagen', ['uses' => 'Auth\AdmController@imagen', 'as' => 'imagen']);
    Route::delete('imagen/delete', ['uses' => 'Auth\AdmController@imagenDestroy', 'as' => 'imagen.delete']);
    Route::post('imagen', ['uses' => 'Auth\AdmController@imagenStore', 'as' => 'imagen.create']);
    /**
     * CONTENIDO
     */
    Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
        Route::get('{seccion}/edit', ['uses' => 'Auth\ContenidoController@edit', 'as' => '.edit']);
        Route::post('{seccion}/update', ['uses' => 'Auth\ContenidoController@update', 'as' => 'update']);
    });
    /**
     * SLIDERS
     */
    Route::resource('slider', 'Auth\SliderController')->except(['index','update','show']);
    Route::get('slider/{seccion}', ['uses' => 'Auth\SliderController@index', 'as' => 'slider.index']);
    Route::post('slider/update/{id}', ['uses' => 'Auth\SliderController@update', 'as' => 'slider.update']);

    /**
     * CATEGORIAS
     */
    Route::resource('categorias', 'Auth\CategoriaController')->except(['update']);
    Route::post('categorias/update/{id}', ['uses' => 'Auth\CategoriaController@update', 'as' => 'categorias.update']);
    /**
     * PRODUCTOS
     */
    Route::resource('productos', 'Auth\ProductoController')->except(['update']);
    Route::post('productos/update/{id}', ['uses' => 'Auth\ProductoController@update', 'as' => 'productos.update']);
    /**
     * SECTORES
     */
    Route::resource('sectores', 'Auth\SectorController')->except(['update']);
    Route::post('sectores/update/{id}', ['uses' => 'Auth\SectorController@update', 'as' => 'sectores.update']);
    /**********************************
            DATOS DE LA EMPRESA
     ********************************** */
    Route::resource('usuarios', 'Auth\UserController')->except(['update']);
    Route::post('usuarios/update/{id}', ['uses' => 'Auth\UserController@update', 'as' => 'usuarios.update']);
    Route::get('usuario/datos', ['uses' => 'Auth\UserController@datos', 'as' => 'usuarios.datos']);

    Route::get('empresa/metadatos', ['uses' => 'Auth\MetadatosController@index', 'as' => 'metadatos.index']);
    Route::post('metadatos/update/{page}', ['uses' => 'Auth\MetadatosController@update', 'as' => 'metadatos.update']);
    /**
     * TIENDAS
     */
    Route::resource('tiendas', 'Auth\TiendaController')->except(['update']);
    Route::post('tiendas/update/{id}', ['uses' => 'Auth\TiendaController@update', 'as' => 'tiendas.update']);

    Route::get('empresa/redes', ['uses' => 'Auth\EmpresaController@redes', 'as' => 'empresa.redes']);
    Route::post('redes', ['uses' => 'Auth\EmpresaController@redesStore', 'as' => 'redes.create']);
    Route::get('redes/{id}/edit', ['uses' => 'Auth\EmpresaController@redesEdit', 'as' => 'empresa.edit']);
    Route::post('redes/update/{id}', ['uses' => 'Auth\EmpresaController@redesUpdate', 'as' => 'redes.update']);
    Route::delete('redes/delete', ['uses' => 'Auth\EmpresaController@redesDestroy', 'as' => 'redes.delete']);

    Route::group(['prefix' => 'empresa', 'as' => 'empresa'], function() {
        Route::get('datos', ['uses' => 'Auth\EmpresaController@datos', 'as' => '.datos']);
        Route::match(['get', 'post'], 'link',['as' => '.link','uses' => 'Auth\EmpresaController@link' ]);
        Route::match(['get', 'post'], 'terminos',['as' => '.terminos','uses' => 'Auth\EmpresaController@terminos' ]);
        Route::match(['get', 'post'], 'form',['as' => '.form','uses' => 'Auth\EmpresaController@form' ]);
        Route::post('update', ['uses' => 'Auth\EmpresaController@update', 'as' => '.update']);
    });
});


Route::get( '{link?}' ,
    [ 'uses' => 'Page\GeneralController@index' , 'as' => 'index' ]
)->where( 'link' , '.*' );
