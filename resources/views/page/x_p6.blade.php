<div class="wrapper-home bg-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md-6">
                {!! $elementos[ "e1" ][ 'text' ] !!}
            </div>
            <div class="col-12 col-md-6">
                @include( 'layouts.general.image' , [ 'i' => $elementos[ "e1" ][ 'image' ] , 'n' => 'Imagen contenido' , 'c' => 'd-block w-100' ] )
            </div>
        </div>
        <div class="row">
            @foreach( $elementos[ "e2" ] AS $e )
            <div class="col-12 col-md-6">
                <a href="{{ asset( $e[ 'file' ][ 'i' ] ) }}" target="blank" class="p-3 bg-light d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="title-download">{{ $e[ "title" ] }}</h3>
                        <p>Descargar</p>
                    </div>
                    <i class="fas fa-download" style="color: #8d230f;"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>