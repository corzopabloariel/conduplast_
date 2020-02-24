<section class="my-3">
    <div class="container-fluid">
        @include( 'layouts.general.form', [ 'buttonADD' => 1 , 'form' => 0 , 'close' => 1 , 'modal' => 1 ] )
        @include( 'layouts.general.table' )
    </div>
</section>
@push('scripts')
<script>
    window.pyrus = new Pyrus("sector", { productos_id : { DATA : window.data.productos } });
    window.pyrus_image = new Pyrus("sector_images");

    addfinish = ( data = null ) => {
        if( data === null )
            document.getElementById( "wrapper-image" ).innerHTML = "";
        else {
            data.images.forEach( x => addImage( null , x ) );
        }
    };

    addImage = ( t , value = null ) => {
        let target = $(`#wrapper-image`);
        let html = "";
        if( window[ `images` ] === undefined )
            window[ `images` ] = 0;
        window[ `images` ] ++;

        html += '<div class="col-12 col-md-4 mt-3 element">';
            html += '<div class="bg-light p-2 border position-relative overflow-hidden">';
                html += window.pyrus_image.formulario( window[ `images` ] , `images` );
                html += `<i style="line-height:14px; cursor: pointer; right: 0; top: 0; padding: 5px;border-radius: 0 0 0 .4em;" onclick="remove_( this , 'element' )" class="fas fa-times position-absolute text-white bg-danger"></i>`;
            html += '</div>';
        html += '</div>';
        target.append( html );
        window.pyrus_image.editor( CKEDITOR , window[ `images` ] , "images" );
        window.pyrus_image.show( CKEDITOR , url_simple , value , window[ `images` ] , "images" );
    };
    /** -------------------------------------
     *      INICIO
     ** ------------------------------------- */
    init( () => {
        window.formArr = [
            { DATA : window.pyrus.objetoSimple , TIPO : "U" },
            { DATA : window.pyrus_image.objetoSimple , TIPO : "M" , COLUMN: "images" , TAG : "images" , KEY: "images" }
        ];

        let h = "";
        h += `<button type="button" class="btn px-4 btn-dark text-center text-uppercase" onclick="addImage( this )">Elemento (Imagen)<i class="fas fa-plus ml-2"></i></button>`;
        h += `<div class="row mt-3n" id="wrapper-image"></div>`;

        document.getElementById( "sector-images-container" ).insertAdjacentHTML('beforeend',h);

        window.pyrus_features.editor( CKEDITOR );
        window.pyrus_models.editor( CKEDITOR );
    } );
</script>
@endpush
