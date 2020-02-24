<div class="wrapper-sector bg-white pb-5 pt-2">
    <div class="container pb-5">
        <ol class="breadcrumb bg-transparent border-0 p-0">
            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Inicio</a></li>
            @php
            $link = App\Empresa::first()->sections[ 0 ][ "p5" ];
            @endphp
            <li class="breadcrumb-item"><a href="{{ URL::to( $link[ 'LINK' ] ) }}">{{ $link[ "NAME" ] }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data[ "elemento" ]->title }}</li>
        </ol>
        <div class="row mt-4">
            <div class="col-12 col-md-6">
                @include( 'layouts.general.slider' , [ 'slider' => $data[ "elemento" ]->images , 'sliderID' => "slider" , 'arrow' => 0 , 'div' => 0 ] )
            </div>
            <div class="col-12 col-md py-5 info">
                <h3 class="title mb-4">{{ $data[ "elemento" ]->title }}</h3>
                {!! $data[ "elemento" ]->text !!}
            </div>
        </div>
        <div class="mt-5 bg-light p-4 productos">
            <h3 class="title">Productos relacionados</h3>
            <div class="row">
                @foreach( $data[ "elemento" ]->productos_id AS $p )
                    <div class="col-12 col-md-4 col-lg-3 mt-4 producto">
                        @php
                        $producto = App\Producto::find( $p );
                        $image = "";
                        if( !empty( $producto->images ) )
                            $image = $producto->images[ 0 ][ "image" ];
                        @endphp
                        <a href="{{ URL::to( 'productos/n/' . str_slug( $producto->title ) . '/' . $producto->id ) }}">
                            @include( 'layouts.general.image' , [ 'i' => $image , 'n' => $producto->title , 'c' => 'd-block w-100 border' ] )
                            <h3 class="title mb-2 mt-3">{{ $producto->title }}</h3>
                            {!! $producto->resume !!}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>