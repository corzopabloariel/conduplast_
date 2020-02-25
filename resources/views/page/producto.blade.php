<div class="wrapper-sector bg-white pb-5 pt-2">
    <div class="container pb-5">
        <ol class="breadcrumb bg-transparent border-0 p-0">
            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Inicio</a></li>
            @php
            $link = App\Empresa::first()->sections[ 0 ][ "p3" ];
            @endphp
            <li class="breadcrumb-item"><a href="{{ URL::to( $link[ 'LINK' ] ) }}">{{ $link[ "NAME" ] }}</a></li>
            <li class="breadcrumb-item"><a href="{{ URL::to( 'productos/c/' . str_slug( $data[ 'categoria' ]->text ) . '/' . $data[ 'categoria' ]->id ) }}">{{ $data[ "categoria" ]->text }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data[ "producto" ]->title }}</li>
        </ol>
        <div class="row mt-5">
            <div class="col-12 col-md-4 col-lg-3 menu-lateral pb-5">
                @include( 'page.menu' )
            </div>
            <div class="col-12 col-md col-lg pb-5 producto-data">
                <div class="row">
                    <div class="col-12 col-md">
                        @include( 'layouts.general.slider' , [ 'slider' => $data[ "producto" ]->images , 'sliderID' => "slider" , 'arrow' => 0 , 'div' => 0 ] )
                    </div>
                    <div class="col-12 col-md-7">
                        <h2 class="title mb-3">{!! $data[ "producto" ]->title !!}</h2>
                        {!! $data[ "producto" ]->text !!}
                        <div class="mt-3 buttons d-flex justify-content-between">
                            <a href="{{ URL::to( 'contacto/' . str_slug( $data[ 'producto' ]->title ) . '/' . $data[ 'producto' ]->id ) }}" class="px-3 btn btn-danger">Consultar</a>
                            @if( !empty( $data[ 'producto' ]->ficha ) )
                            <a class="px-3 btn btn-danger" href="{{ asset( $data[ 'producto' ]->ficha[ 'i' ] ) }}" download>Ficha técnica</a>
                            @endif
                            @if( !empty( $data[ 'producto' ]->mercadolibre ) )
                            <a target="blank"  href="{{ asset( $data[ 'producto' ]->mercadolibre ) }}" class="px-3 btn btn-warning">@include( 'layouts.general.image' , [ 'i' => 'images/ml.png' , 'n' => 'ML' , 'c' => 'd-inline-block' ] )</a>
                            @endif
                        </div>
                    </div>
                </div>
                @if( !empty( $data[ "producto" ]->features ) )
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="title p-2 bg-light">{{ $data[ "producto" ]->features[ "title" ] }}</h3>
                        {!! $data[ "producto" ]->features[ "features" ] !!}
                    </div>
                </div>
                @endif
                @if( !empty( $data[ "producto" ]->models ) )
                <div class="row mt-4">
                    <div class="col-12">
                        <h3 class="title p-2 bg-light">{{ $data[ "producto" ]->models[ "title" ] }}</h3>
                        {!! $data[ "producto" ]->models[ "models" ] !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>