<section class="bg-white wrapper-home">
    @include( 'layouts.general.slider' , [ 'slider' => $data[ 'slider' ] , 'sliderID' => "slider" , 'div' => 1 , 'arrow' => 0 ] )
    @include( 'page.x_p2' , [ 'elementos' => $data[ 'contenido' ]->data ] )
</div>