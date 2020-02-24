<div class="wrapper-p1 bg-light">
    @isset( $elementos[ "e1" ] )
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md d-flex align-items-center">
                <div class="w-100">
                    {!! $elementos[ "e1" ][ 'text' ] !!}
                </div>
            </div>
            <div class="col-12 col-md-7">
                @include( 'layouts.general.image' , [ 'i' => $elementos[ "e1" ][ 'image' ] , 'n' => 'Imagen contenido' , 'c' => 'd-block mx-auto w-100' ] )
            </div>
        </div>
    </div>
    @endisset
    @isset( $elementos[ 'e2' ] )
    <div style="background-image: url( {{ asset( $elementos[ 'e2' ][ 'image' ][ 'i' ] ) }} )" class="d-flex banner py-4 align-items-center justify-content-center">
        <div>
            {!! $elementos[ 'e2' ][ 'text' ] !!}
            <div class="mt-4">
                <button class="btn btn-danger mx-auto d-block px-4">{{ $elementos[ 'e2' ][ 'btn' ] }}</button>
            </div>
        </div>
    </div>
    @endisset
</div>
