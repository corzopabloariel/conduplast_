@php
$social_networks = [
    'instagram' => '<i class="fab fa-instagram"></i>',
    'linkedin' => '<i class="fab fa-linkedin-in"></i>',
    'youtube' => '<i class="fab fa-youtube"></i>',
    'facebook' => '<i class="fab fa-facebook-f"></i>',
    'twitter' => '<i class="fab fa-twitter"></i>',
    'pinterest' => '<i class="fab fa-pinterest-p"></i>'
];
@endphp
<header class="border-bottom">
    <div class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-none d-lg-block">
                <div class="d-flex justify-content-between align-items-center">
                    @foreach( $data["telefonoHeader"] AS $i => $dd )
                        @if( $i == "tel" )
                        <div class="btn btn-danger mr-2"><i class="fas fa-phone-alt"></i></div>
                        @else
                        <div class="btn ml-4 mr-2" style="border-color: transparent; color: #5fc95c;"><i class="fab fa-whatsapp"></i></div>
                        @endif
                        <div class="d-flex">
                            @foreach( $data["telefonoHeader"][ $i ] AS $t )
                                @include( 'layouts.general.telefono' , [ "dato" => $t ] )
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <form action="" method="get" class="d-flex">
                    <input placeholder="Estoy buscando ..." type="search" name="" class="form-control border-0">
                    <button class="btn btn-danger"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container position-relative">
        <div>
            @php
            $flag_icon = false;
            $key = array_key_first( $data['empresa']->sections[ 0 ] );
            $section = $data['empresa']->sections[ 0 ][ $key ];
            @endphp
            <a class="navbar-brand logo-header py-0 position-relative align-self-center mr-0" href="{{ URL::to( $section[ 'LINK' ] ) }}">
                @include( 'layouts.general.image' , [ 'i' => $data['empresa']->images['logo'] , 'c' => 'logo' , 'n' => 'Logo' ] )
            </a>
            <div class="d-none d-lg-block">
                @php
                $sections = [];
                foreach( $data[ "empresa" ]->sections[ 0 ] AS $s ) {
                    if( !isset( $sections[ $s[ "GROUP" ] ] ) )
                        $sections[ $s[ "GROUP" ] ] = [];
                    $sections[ $s[ "GROUP" ] ][] = $s;
                }
                $flag_icon = true;
                @endphp
                <div class="d-flex justify-content-between align-items-center menu">
                    @foreach( $sections AS $i => $group )
                        <div class="d-flex">
                            @foreach( $group AS $s )
                                @if( empty( $s[ "FIRST"] ) )
                                @php
                                $flag = false;
                                $class = "d-block p-2";
                                if( isset( $s[ "CLASS" ] ) )
                                    $class .= " {$s[ "CLASS" ]}";
                                for( $i = 0 ; $i < count( $s[ "URL" ] ) ; $i++ ) {
                                    if( Request::is( "{$s[ 'URL' ][ $i ]}*" ) )
                                        $flag = true;
                                }
                                if( $flag )
                                    $class .= " active";
                                @endphp
                                <div>
                                    <a class="{{ $class }}" href="{{ URL::to( $s[ 'LINK' ] ) }}">{{ $s[ 'NAME' ] }}</a>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        @if( $flag_icon )
                            @php
                            $flag_icon = false;
                            $key = array_key_first( $data['empresa']->sections[ 0 ] );
                            $section = $data['empresa']->sections[ 0 ][ $key ];
                            @endphp
                            <a class="navbar-brand py-0 position-relative align-self-center mr-0" href="{{ URL::to( $section[ 'LINK' ] ) }}">
                                @include( 'layouts.general.image' , [ 'i' => $data['empresa']->images['logo'] , 'c' => 'logo' , 'n' => 'Logo' ] )
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div id="menu-buscador" class="align-self-center">
            <div id="hamburger" class="hamburger mt-2" onclick="menuBody( this );">
                <div class="position-relative p-3">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
