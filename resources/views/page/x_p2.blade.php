
<div class="wrapper-p2 bg-white">
    @isset( $elementos[ "e1" ] )
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-4">
                @include( 'layouts.general.image' , [ 'i' => $elementos[ "e1" ][ 'image' ] , 'n' => 'Imagen contenido' , 'c' => 'd-block
                mx-auto w-100' ] )
            </div>
            <div class="col-12 col-md-8">{!! $elementos[ "e1" ][ "text" ] !!}</div>
        </div>
    </div>
    @endisset
    @isset( $elementos[ "e2" ] )
    <div class="anios bg-light">
        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="cd-horizontal-timeline">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ol>
                                        @for( $i = 0 ; $i < count( $elementos[ "e2" ] ) ; $i++ )
                                            <li><a href="#0" data-date="01/01/{{ $elementos[ 'e2' ][ $i ][ 'order' ] }}" @if( $i==0 ) class="selected" @endif>{{ $elementos[ 'e2' ][ $i ][ 'order' ] }}</a></li>
                                        @endfor
                                    </ol>
                                    <span class="filling-line" aria-hidden="true"></span>
                                </div> <!-- .events -->
                            </div> <!-- .events-wrapper -->

                            <ul class="cd-timeline-navigation">
                                <li><a href="#0" class="prev inactive">Prev</a></li>
                                <li><a href="#0" class="next">Next</a></li>
                            </ul> <!-- .cd-timeline-navigation -->
                        </div> <!-- .timeline -->

                        <div class="events-content">
                            <ol>
                                @for( $i = 0 ; $i < count( $elementos[ "e2" ] ) ; $i++ ) <li @if( $i==0 ) class="selected" @endif data-date="01/01/{{ $elementos[ 'e2' ][ $i ][ 'order' ] }}">
                                    @if( !empty( $elementos[ 'e2' ][ $i ]['text'] ) )
                                    <div class="my-3">{!! $elementos[ 'e2' ][ $i ]['text'] !!}</div>
                                    @endif
                                    @if( !empty( $elementos[ 'e2' ][ $i ]['image'] ) )
                                    <img class="d-block mx-auto" style="max-width: 100%;" src="{{asset($elementos[ 'e2' ][ $i ]['image']['i'])}}">
                                    @endif
                                    </li>
                                @endfor
                            </ol>
                        </div> <!-- .events-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endisset
</div>
@push('scripts')
<script src="{{ asset('js/timeline.js') }}"></script>
@endpush
