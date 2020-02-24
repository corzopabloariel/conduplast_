<div class="bg-white">
    <section id="conference-timeline">
        <div class="conference-center-line"></div>
        <div class="conference-timeline-content">
            @for( $i = 0 ; $i < count( $elementos[ "e1" ] ) ; $i++ )
            <div class="timeline-article">
                <div class="content-left-container">
                    <div class="content-left p-0">
                        @if( $i % 2 == 0 )
                            @include( 'layouts.general.image' , [ 'i' => $elementos[ "e1" ][ $i ][ 'image' ] , 'n' => 'Imagen contenido' , 'c' => 'd-block' ] )
                        @else
                            <h4 class="title">{{ $elementos[ "e1" ][ $i ][ "title" ] }}</h4>
                            {!! $elementos[ "e1" ][ $i ][ "text" ] !!}
                        @endif
                    </div>
                </div>
                <div class="content-right-container">
                    <div class="content-right">
                        @if( $i % 2 == 0 )
                            <h4 class="title">{{ $elementos[ "e1" ][ $i ][ "title" ] }}</h4>
                            {!! $elementos[ "e1" ][ $i ][ "text" ] !!}
                        @else
                            @include( 'layouts.general.image' , [ 'i' => $elementos[ "e1" ][ $i ][ 'image' ] , 'n' => 'Imagen contenido' , 'c' => 'd-block' ] )
                        @endif
                    </div>
                </div>
                <div class="meta-date">
                    @include( 'layouts.general.image' , [ 'i' => $elementos[ "e1" ][ $i ][ 'icon' ] , 'n' => 'Imagen contenido' , 'c' => '' ] )
                </div>
            </div>
            @endfor
        </div>
    </section>
</div>