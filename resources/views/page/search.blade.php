<div class="wrapper-sector bg-white py-5">
    <div class="container pb-4">
        <div class="row py-4 productos">
            @if( $data[ "productos" ]->isEmpty() )
            <div class="col-12 text-center">
                <h3>Sin resultado para: <strong>{{$data[ 'search' ]}}</strong></h3>
            </div>
            @else
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
            @endif
        </div>
    </div>
</div>