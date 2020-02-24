<section class="my-3 wrapper-home">
    <div class="container-fluid">
        <button onclick="openElement( this );" type="button" class="btn btn-danger" style="right: 0; top: 0;"><i
                class="fas fa-eye"></i></button>
        <div class="mb-4" style="display: none;">
            @include( 'page.x_p4' , [ 'elementos' => $data[ 'elementos' ]->data ] )
        </div>
        @include( 'layouts.general.form', [ 'buttonADD' => 0 , 'form' => 1 , 'close' => 0 , 'url' =>
        url('/adm/contenido/' . $data['section'] . '/update') , 'modal' => 0 ] )
    </div>
</section>
@push('scripts')
<script>
    window.pyrus_elemento_1 = new Pyrus( "contenido_p4_elemento_1" );

    addFeatures = ( t , value = null ) => {
        let target = $(`#wrapper-e1`);
        let html = "";
        if( window[ `e1` ] === undefined )
            window[ `e1` ] = 0;
        window[ `e1` ] ++;

        html += '<div class="col-12 col-md-4 mt-3 element">';
            html += '<div class="bg-light p-2 border position-relative overflow-hidden">';
                html += window.pyrus_elemento_1.formulario( window[ `e1` ] , `e1` );
                html += `<i style="line-height:14px; cursor: pointer; right: 0; top: 0; padding: 5px;border-radius: 0 0 0 .4em;" onclick="remove_( this , 'element' )" class="fas fa-times position-absolute text-white bg-danger"></i>`;
            html += '</div>';
        html += '</div>';
        target.append( html );
        window.pyrus_elemento_1.editor( CKEDITOR , window[ `e1` ] , "e1" );
        window.pyrus_elemento_1.show( CKEDITOR , url_simple , value , window[ `e1` ] , "e1" );
    };
    init( () => {
        window.formArr = [ { DATA : window.pyrus_elemento_1.objetoSimple , TIPO : "M" , COLUMN: "e1" , TAG : "e1" , KEY: "e1" } ];
        let h = "";
        h += `<div class="row justify-content-center pt-3">`;
            h += `<div class="col-12">`;
                h += `<button type="button" class="btn px-4 btn-dark text-center text-uppercase"
                    onclick="addFeatures( this )">Característica<i class="fas fa-plus ml-2"></i></button>`;
                h += `</div>`;
            h += `</div>`;
        h += `<div class="row mt-3n" id="wrapper-e1"></div>`;

        document.getElementById("form").getElementsByClassName("container-form")[0].innerHTML = h;

        if( window.data.elementos.data !== null )
            window.data.elementos.data.e1.forEach( x => addFeatures( null , x ) );
    } );
</script>
@endpush
