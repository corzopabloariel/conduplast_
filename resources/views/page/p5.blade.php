<div class="wrapper-sector bg-white py-5">
    <div class="container">
        @foreach( $data[ "sectores" ] AS $s )
        <div class="col-12 col-md-4 col-lg-3 mt-4">
            <a href="" class="d-block">
                @php
                $img = "";
                if( !empty( $s[ 'images' ] ) )
                    $img = $s[ 'images' ][ 0 ];
                @endphp
                @include( 'layouts.general.image' , [ 'i' => $img[ 'image' ] , 'n' => $s[ 'title' ] , 'c' => 'd-block mx-auto w-100' ] )
                <p class="mt-3">{{ $s[ "title" ] }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>