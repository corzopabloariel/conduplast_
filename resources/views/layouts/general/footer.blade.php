<footer>
    <div class="container pb-2 pt-4 position-relative">
        <div class="row justify-content-start pt-3">
            <div class="col-12 my-2 col-md-6 col-lg-3 d-flex flex-column order-o-1">
                @include( 'layouts.general.image' , [ 'i' => $data['empresa']->images['logoFooter'] , 'c' => 'logo align-self-start' , 'n' => 'Logo' ] )
            </div>
            <div class="col-12 my-2 col-md-6 col-lg-3">
                <h4 class="title mb-3">Mapa del sitio</h4>
                <ul class="list-unstyled mb-0 menu">
                    @foreach( $data[ "empresa" ]->sections[ 0 ] AS $s )
                    <li class="mb-2"><a href="{{ URL::to( $s[ 'LINK' ] ) }}">{{ $s[ 'NAME' ] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 my-2 col-md-6 col-lg">
                <h4 class="title mb-3">Redes sociales</h4>
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
                <div class="d-flex social-networks ml-n2">
                    @foreach( $data[ "empresa" ]->social_networks AS $k => $red )
                    <a class="ml-2" href="{{ $red[ 'url' ] }}" target="_blank" rel="noopener noreferrer">{!! $social_networks[ $red[ 'redes' ] ] !!} {{ $red[ 'titulo' ] }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-12 my-2 col-md-4 col-lg order-o-3">
                <h4 class="title mb-3">{{ env( 'APP_NAME' ) }}</h4>
                <ul class="list-unstyled info mb-0">
                    <li class="d-flex align-items-start">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            @include( 'layouts.general.domicilio' , [ "dato" => $data[ 'empresa' ]->domicile , "link" => 1 ] )
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled info mt-2 mb-0">
                    <li class="d-flex align-items-start">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            @foreach( $data[ "telefono" ] AS $t )
                                @include( 'layouts.general.telefono' , [ "dato" => $t ] )
                            @endforeach
                        </div>
                    </li>
                </ul>
                @if( !empty( $data[ "whatsapp" ] ) )
                    <ul class="list-unstyled info mb-0">
                        <li class="d-flex align-items-start">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                @foreach( $data[ "whatsapp" ] AS $t )
                                    @include( 'layouts.general.telefono' , [ "dato" => $t ] )
                                @endforeach
                            </div>
                        </li>
                    </ul>
                @endif
                <ul class="list-unstyled info mail mt-2 mb-0">
                    <li class="d-flex align-items-start">
                        <i class="fas fa-envelope"></i>
                        <div>
                            @foreach( $data["empresa"]->email as $e )
                                @include( 'layouts.general.email' , [ "dato" => $e ] )
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="osole py-3">
        <div class="container">
            <div class="row by">
                <div class="col-12">
                    <p class="mb-0 d-flex justify-content-between">
                        <span>© {{ env( 'APP_YEAR' ) }}</span>
                        <a target="_blank" href="{{ env('APP_UAUTHOR') }}" style="color:inherit" class="right text-uppercase">by {{ env('APP_AUTHOR') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
