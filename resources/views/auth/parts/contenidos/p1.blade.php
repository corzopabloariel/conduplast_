<section class="my-3 wrapper-home">
    <div class="container-fluid">
        <button onclick="openElement( this );" type="button" class="btn btn-danger" style="right: 0; top: 0;"><i class="fas fa-eye"></i></button>
        <div class="mb-4" style="display: none;">
            @include( 'page.x_p1' , [ 'elementos' => $data[ 'elementos' ]->data ] )
        </div>
        @include( 'layouts.general.form', [ 'buttonADD' => 0 , 'form' => 1 , 'close' => 0 , 'url' => url('/adm/contenido/' . $data['section'] . '/update') , 'modal' => 0 ] )
    </div>
</section>
@push('scripts')
<script>
    window.pyrus_elemento_1 = new Pyrus( "contenido_p1_elemento_1" );
    window.pyrus_elemento_2 = new Pyrus( "contenido_p1_elemento_2" );

    init( () => {
        window.formArr = [ { DATA : window.pyrus_elemento_1.objetoSimple , TIPO : "U" , COLUMN : "e1" } , { DATA : window.pyrus_elemento_2.objetoSimple , TIPO : "U" , COLUMN : "e2" } ];
        let h = "";

        h += `<div class="row justify-content-center">`;
            h += `<div class="col-12">`;
                h += `<fieldset class="p-3 border">`;
                    h += window.pyrus_elemento_1.formulario();
                h += `</fieldset>`;
            h += `</div>`;
        h += `</div>`;
        h += `<div class="row justify-content-center mt-3">`;
            h += `<div class="col-12">`;
                h += `<fieldset class="p-3 border">`;
                    h += window.pyrus_elemento_2.formulario();
                h += `</fieldset>`;
            h += `</div>`;
        h += `</div>`;
        document.getElementById("form").getElementsByClassName("container-form")[0].innerHTML = h;
        window.pyrus_elemento_1.editor( CKEDITOR );
        window.pyrus_elemento_2.editor( CKEDITOR );

        if( window.data.elementos.data !== null ) {
            window.pyrus_elemento_1.show( CKEDITOR , url_simple , window.data.elementos.data.e1 );
            window.pyrus_elemento_2.show( CKEDITOR , url_simple , window.data.elementos.data.e2 );
        }
    } );
</script>
@endpush
