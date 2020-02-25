<div class="wrapper-sector bg-white pb-5 pt-2">
    <div class="container pb-5">
        <ol class="breadcrumb bg-transparent border-0 p-0">
            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Inicio</a></li>
            @php
            $link = App\Empresa::first()->sections[ 0 ][ "p3" ];
            @endphp
            <li class="breadcrumb-item"><a href="{{ URL::to( $link[ 'LINK' ] ) }}">{{ $link[ "NAME" ] }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data[ "categoria" ]->text }}</li>
        </ol>
        <div class="row mt-4">
            <div class="col-12 col-md-4 col-lg-3 menu-lateral pb-5">
                @include( 'page.menu' )
            </div>
            <div class="col-12 col-md col-lg pb-5 mt-n4 productos">
                @foreach( $data[ "productos" ] AS $p )
                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                        @php
                        $image = "";
                        if( !empty( $p->images ) )
                            $image = $p->images[ 0 ][ "image" ];
                        @endphp
                        <a href="{{ URL::to( 'productos/' . str_slug( $p->categoria->text ) . '/' . str_slug( $p->title ) . '/' . $p->id ) }}" class="d-block producto categoria">
                            @include( 'layouts.general.image' , [ 'i' => $image , 'n' => $p->title , 'c' => 'd-block w-100 border' ] )
                            <h3 class="title mb-2 mt-3">{{ $p->title }}</h3>
                            {!! $p->resume !!}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>