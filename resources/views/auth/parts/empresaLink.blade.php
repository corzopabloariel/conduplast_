<section class="my-3">
    <div class="container-fluid">
        <div style="display: block;" id="wrapper-form" class="">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Nombre de los links del menu.
                    </div>
                    <form id="form" onsubmit="event.preventDefault(); formSubmit(this);" class="pt-2" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="btn btn-lg px-5 mx-auto mb-2 btn-success text-uppercase text-center">cambios<i class="far fa-save ml-2"></i></button>
                        <fieldset class="border p-2">
                            <legend class="border-bottom">Parte pública</legend>
                            <div class="row mt-n3">
                                @foreach( $data[ "elementos" ]->sections[ 0 ] AS $k => $s )
                                <div class="col-12 col-md-5 mt-3">
                                    <div class="form-label-group mb-0">
                                        <input value="{{ $s[ 'NAME' ] }}" name="publica[{{ $k }}][NAME]" id="publica_{{ $k }}" class="form-control texto-text border-left-0 border-right-0 border-top-0 rounded-0" type="text" placeholder="Nombre de página">
                                        <label for="publica_{{ $k }}" class="form-adm">Nombre de página</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 mt-3">
                                    <div class="form-label-group mb-0">
                                        <input @isset( $s[ 'ICON' ] ) value="{{ $s[ 'ICON' ] }}" @endisset name="publica[{{ $k }}][ICON]" id="publica_{{ $k }}_icon" class="form-control texto-text border-left-0 border-right-0 border-top-0 rounded-0" type="text" placeholder="Ícono del administrador">
                                        <label for="publica_{{ $k }}_icon" class="form-adm">Ícono del administrador</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </fieldset>
                        @isset( $data[ "elementos" ]->sections[ 1 ] )
                        <fieldset class="border p-2">
                            <legend class="border-bottom">Parte privada</legend>
                            <div class="row mt-n3">
                                @foreach( $data[ "elementos" ]->sections[ 1 ] AS $k => $s )
                                <div class="col-12 col-md-5 mt-3">
                                    <div class="form-label-group mb-0">
                                        <input value="{{ $s[ 'NAME' ] }}" name="publica[{{ $k }}][NAME]" id="privada_{{ $k }}" class="form-control texto-text border-left-0 border-right-0 border-top-0 rounded-0" type="text" placeholder="Nombre de página">
                                        <label for="privada_{{ $k }}" class="form-adm">Nombre de página</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 mt-3">
                                    <div class="form-label-group mb-0">
                                        <input @isset( $s[ 'ICON' ] ) value="{{ $s[ 'ICON' ] }}" @endisset name="privada[{{ $k }}][ICON]" id="privada_{{ $k }}_icon" class="form-control texto-text border-left-0 border-right-0 border-top-0 rounded-0" type="text" placeholder="Ícono del administrador">
                                        <label for="privada_{{ $k }}_icon" class="form-adm">Ícono del administrador</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </fieldset>
                        @endisset
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    formSubmit = function(t) {
        let idForm = t.id;
        let formElement = document.getElementById( idForm );
        let formData = new FormData( formElement );
        formSave( t , formData );
    };
</script>
@endpush