<div class="wrapper-sector bg-white py-5">
    <div class="container">
        <div class="row py-4 productos">
            @foreach( $data[ "categorias" ] AS $c )
            <div class="col-12 col-md-4 col-lg-3">
                <a href="{{ URL::to( 'productos/c/' . str_slug( $c->text ) . '/' . $c->id ) }}" class="d-block producto categoria border-bottom">
                    @include( 'layouts.general.image' , [ 'i' => $c->image , 'n' => $c->text , 'c' => 'd-block w-100 border' ] )
                    <h3 class="title mb-2 mt-3">{{ $c->text }}</h3>
                    <div class="resume mb-3">
                        {!! $c->resume !!}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>