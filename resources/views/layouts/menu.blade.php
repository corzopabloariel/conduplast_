<div class="position-relative h-100">
    <ul class="list-unstyled bg-white nav components d-block m-0 p-0">
        @foreach(MENU AS $i)
            @php
            if( isset( $i["icono"] ) )
                $icon = $i["icono"];
            if( isset( $i[ "nombre" ] ) ) {
                $nombre = $i[ "nombre" ];
                if( isset( $i[ "search" ] ) ) {
                    if( isset( $section[ $i[ "id" ] ] ) )
                        $nombre = $section[ $i[ "id" ] ][ 'NAME' ];
                    if( isset( $section[ $i[ "id" ] ] ) ) {
                        if( isset( $section[ $i[ "id" ] ][ 'ICON' ] ) )
                            $icon = $section[ $i[ "id" ] ][ 'ICON' ];
                    }
                }
            }
            @endphp
            @if(isset($i["separar"]))
            <li class="nav-item"><hr></li>
            @elseif(!isset($i["submenu"]))
            <li class="nav-item" title="{{ $nombre }}">
                <a class="nav-link" data-link="a" href="{{ $i['url'] }}">
                    {!! $icon !!}
                    @if(!isset($i["ok"]))
                    <strike><span class="nav-label">{{ $nombre }}</span></strike>
                    @else
                    <span class="nav-label">{{ $nombre }}</span>
                    @endif
                </a>
            </li>
            @else
            <li class="nav-item @if(route::current()->getName() == 'categorias.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'productoimage.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'productos.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'descargapartes.index' && $i[ 'id' ] == 'descargas') active @endif" title="{{ $nombre }}">
                <a class="nav-link" href="#{{ $i[ 'id' ] }}Submenu" data-toggle="collapse" aria-expanded="@if(route::current()->getName() == 'categorias.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'productoimage.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'productos.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'descargapartes.index' && $i[ 'id' ] == 'descargas') true @else false @endif">
                    {!! $icon !!}
                    @if(!isset($i["ok"]))
                    <strike><span class="nav-label">{{ $nombre }}</span></strike>
                    @else
                    <span class="nav-label">{{ $nombre }}</span>
                    @endif
                </a>
                <ul class="collapse list-unstyled @if(route::current()->getName() == 'categorias.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'productoimage.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'productos.index' && $i[ 'id' ] == 'productos' || route::current()->getName() == 'descargapartes.index' && $i[ 'id' ] == 'descargas') show @endif" id="{{$i['id']}}Submenu">
                @foreach($i["submenu"] AS $o)
                <li class="nav-item" title="{{ $o['nombre'] }}"    >
                    <a class="nav-link" data-link="u" href="{{ $o['url'] }}">
                        {!! $o['icono'] !!}
                        <span class="nav-label">{{ $o['nombre'] }}</span>
                    </a>
                </li>
                @endforeach
                </ul>
            </li>
            @endif
        @endforeach
    </ul>

    <a class="nav-soporte position-absolute" href="https://osole.freshdesk.com/support/home" target="_blank">
        <i class="nav-icon fas fa-ticket-alt"></i>
        <span class="nav-label">Soporte</span>
    </a>
</div>
