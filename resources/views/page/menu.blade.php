<button class="btn btn-warning text-uppercase d-block d-sm-none rounded-0 mb-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    categorias<i class="fas fa-sort-amount-down ml-2"></i>
</button>
<div class="sidebar collapse bg-transparent dont-collapse-sm sticky-top" id="collapseExample">
    <div class="sidebar mt-n2">
        @foreach( $data[ "categorias"] AS $categoria)
        <div class="accordion md-accordion bg-transparent border-0 border-bottom mt-2" role="tablist" aria-multiselectable="true">
            <div class="card bg-transparent border-0">
                @php
                $productos = $categoria->productos()->where( "elim" , 0 )->orderBy( "order" )->get();
                @endphp
                <div class="card-header bg-transparent p-0 border-0" role="tab" id="Hproductos{{ $categoria->id }}">
                    @php
                    $aria_expanded = "aria-expanded=false";
                    if( isset( $data[ 'categoria' ] ) ) {
                        if( $categoria->id == $data[ 'categoria' ]->id ) 
                            $aria_expanded = "aria-expanded=true";
                    }
                    $url_categoria = URL::to( 'productos/c/' . str_slug( $categoria->text ) . '/' . $categoria->id );
                    @endphp
                    <h5 class="mb-0 parte d-flex justify-content-between border-bottom-0 align-items-center pb-2" data-parent="#collapseExample" data-toggle="collapse" data-target="#productos{{ $categoria->id }}" {{ $aria_expanded }} aria-controls="productos{{ $categoria->id }}">
                        <a href="{{ $url_categoria }}">
                            {{ $categoria->text }}
                        </a>
                        @if( $productos->isNotEmpty() )
                        <i class="rotate-icon fas fa-angle-down"></i>
                        @endif
                    </h5>
                </div>
                @if( $productos->isNotEmpty() )
                    @php
                    $class = "collapse";
                    if( isset( $data[ 'categoria' ] ) ) {
                        if( $categoria->id == $data[ 'categoria' ]->id ) {
                            $class .= " show";
                        }
                    }
                    @endphp
                    {{--@if( $productos->count() == 1 )
                        @if( $productos[ 0 ]->title != $categoria->text )
                            <div id="productos{{ $categoria->id }}" class="{{ $class }}" role="tabpanel" aria-labelledby="Hproductos{{ $categoria->id }}" data-parent="#accordionEx2">
                                <div class="card-body bg-transparent p-0">
                                    <ul class="list-group list-group-flush productos">
                                        @foreach ( $productos AS $producto )
                                        @php
                                        $class = "d-block";
                                        if( isset( $data[ "producto" ] ) ) {
                                            if( $producto->id == $data[ "producto" ]->id )
                                                $class .= " active";
                                        }
                                        $url_producto = URL::to( 'producto/' . str_slug( $producto->title ) . '/' . $producto->id );
                                        @endphp
                                        <li class="list-group-item bg-transparent border-0 py-2">
                                            <a class="{{ $class }}" href="{{ $url_producto }}">{{ $producto->title }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @else--}}
                        <div id="productos{{ $categoria->id }}" class="{{ $class }}" role="tabpanel" aria-labelledby="Hproductos{{ $categoria->id }}" data-parent="#accordionEx">
                            <div class="card-body bg-transparent p-0">
                                <ul class="list-group list-group-flush productos">
                                    @foreach ( $productos AS $producto )
                                    @php
                                    $class = "d-block";
                                    if( isset( $data[ "producto" ] ) ) {
                                        if( $producto->id == $data[ "producto" ]->id )
                                            $class .= " active";
                                    }
                                    $url_producto = URL::to( 'productos/' . str_slug( $producto->categoria->text ) . '/' . str_slug( $producto->title ) . '/' . $producto->id );
                                    @endphp
                                    <li class="list-group-item bg-transparent border-0 py-2">
                                        <a class="{{ $class }}" href="{{ $url_producto }}">{{ $producto->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>