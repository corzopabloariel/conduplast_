<section class="my-3 wrapper-home">
    <div class="container-fluid">
        <button onclick="openElement( this );" type="button" class="btn btn-danger" style="right: 0; top: 0;"><i class="fas fa-eye"></i></button>
        <div class="mb-4" style="display: none;">
            @include( 'page.x_p6' , [ 'elementos' => $data[ 'elementos' ]->data ] )
        </div>
        @include( 'layouts.general.form', [ 'buttonADD' => 0 , 'form' => 1 , 'close' => 0 , 'url' => url('/adm/contenido/' . $data['section'] . '/update') , 'modal' => 0 ] )
    </div>
</section>
@push('scripts')
<script>
    window.pyrus_elemento_1 = new Pyrus( "contenido_p6_elemento_1" );
    window.pyrus_elemento_2 = new Pyrus( "contenido_p6_elemento_2" );

    addFile = ( t , value = null ) => {
        let target = $(`#wrapper-e2`);
        let html = "";
        if( window[ `e2` ] === undefined )
            window[ `e2` ] = 0;
        window[ `e2` ] ++;

        html += '<div class="col-12 col-md-4 mt-3 element">';
            html += '<div class="bg-light p-2 border position-relative overflow-hidden">';
                html += window.pyrus_elemento_2.formulario( window[ `e2` ] , `e2` );
                html += `<i style="line-height:14px; cursor: pointer; right: 0; top: 0; padding: 5px;border-radius: 0 0 0 .4em;" onclick="remove_( this , 'element' )" class="fas fa-times position-absolute text-white bg-danger"></i>`;
            html += '</div>';
        html += '</div>';
        target.append( html );
        window.pyrus_elemento_2.editor( CKEDITOR , window[ `e2` ] , "e2" );
        window.pyrus_elemento_2.show( CKEDITOR , url_simple , value , window[ `e2` ] , "e2" );
    };

    init( () => {
        window.formArr = [ { DATA : window.pyrus_elemento_1.objetoSimple , TIPO : "U" , COLUMN : "e1" } , { DATA : window.pyrus_elemento_2.objetoSimple , TIPO : "M" , COLUMN: "e2" , TAG : "e2" , KEY: "e2" } ];
        let h = "";

        h += `<div class="row justify-content-center">`;
            h += `<div class="col-12">`;
                h += `<fieldset class="p-3 border">`;
                    h += window.pyrus_elemento_1.formulario();
                h += `</fieldset>`;
            h += `</div>`;
        h += `</div>`;

        h += `<div class="row justify-content-center pt-3">`;
            h += `<div class="col-12">`;
                h += `<button type="button" class="btn px-4 btn-dark text-center text-uppercase" onclick="addFile( this )">Archivo<i class="fas fa-plus ml-2"></i></button>`;
            h += `</div>`;
        h += `</div>`;
        h += `<div class="row mt-3n" id="wrapper-e2"></div>`;

        document.getElementById("form").getElementsByClassName("container-form")[0].innerHTML = h;
        window.pyrus_elemento_1.editor( CKEDITOR );

        if( window.data.elementos.data !== null ) {
            window.pyrus_elemento_1.show( CKEDITOR , url_simple , window.data.elementos.data.e1 );
            window.data.elementos.data.e2.forEach( x => addFile( null , x ) );
        }
    } );
</script>
@endpush
