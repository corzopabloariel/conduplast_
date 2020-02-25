<div class="wrapper-contacto bg-white pb-5 pt-4">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="d-flex">
                    <div class="pedido-step" id="step_1">
                        <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center"><i class="fas fa-file-signature"></i></div>
                        <p class="text-uppercase mt-3 text-center">Primer paso</p>
                        <p class="text-center">Datos</p>
                    </div>
                    <div class="pedido-line align-self-center"></div>
                    <div class="pedido-step disabled" id="step_2">
                        <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center"><i class="fas fa-file-signature"></i></div>
                        <p class="text-uppercase mt-3 text-center">segundo paso</p>
                        <p class="text-center">Consulta</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-12">
                <h2 class="title text-center">Consulte a nuestros profesionales</h2>
            </div>
            <div class="col-12 col-md-8 mt-5">
                <form novalidate onsubmit="event.preventDefault(); enviar(this)" id="form" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="elementos[nombre]" value="Nombre">
                    <input type="hidden" name="elementos[tipo]" value="Tipo">
                    <input type="hidden" name="elementos[email]" value="Correo electrónico">
                    <input type="hidden" name="elementos[telefono]" value="Teléfono">
                    <input type="hidden" name="elementos[mensaje]" value="Mensaje">
                    <div id="e_1">
                        <div class="row">
                            <div class="col-12 col-md">
                                <input placeholder="Ingrese Nombre (*)" required type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
                            </div>
                            <div class="col-12 col-md">
                                <select class="form-control" required name="tipo" id="tipo">
                                    <option value="" hidden selected>Empresa o particular</option>
                                    <option>Empresa</option>
                                    <option>Particular</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <input placeholder="Ingrese Correo electrónico (*)" required type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            </div>
                            <div class="col-12 col-md">
                                <input placeholder="Teléfono" type="phone" name="telefono" class="form-control" value="{{ old('telefono') }}">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-end">
                                <button onclick="siguiente(this,1)" type="button" class="btn btn-danger px-4 btn-primary text-uppercase">siguiente</button>
                            </div>
                        </div>
                    </div>
                    <div id="e_2" class="d-none">
                        <div class="row">
                            <div class="col-12 col-md">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input required type="file" accept="image/jpeg,application/pdf" value="" name="file" class="custom-file-input" id="file">
                                        <label data-invalid="Adjuntar archivo" data-valid="Archivo cargado" class="custom-file-label mb-0 text-truncate" data-browse="..." for="file"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md">
                                <textarea placeholder="Escribir mensaje" name="mensaje" class="form-control">{{ old('mensaje') }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-between">
                                <button onclick="siguiente(this,0)" type="button" class="btn px-4 btn-danger text-uppercase">volver</button>
                                <button type="submit" class="btn btn-danger text-uppercase px-4 ml-2">enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ $data[ 'empresa' ]->captcha[ 'public' ] }}"></script>
<script>
    isVisible = ele => {
        var style = window.getComputedStyle( document.getElementById ( ele ) );
        return  style.width !== "0" &&
            style.height !== "0" &&
            style.opacity !== "0" &&
            style.display!=='none' &&
            style.visibility!== 'hidden';
    };
    enviar = function(t) {
        if( isVisible( "e_1" ) ) {
            siguiente(this,1);
            return false;
        }
        
        let url = t.action;
        let method = t.method;
        let idForm = t.id;
        let formElement = document.getElementById( idForm );
        let formData = new FormData( formElement );
        grecaptcha.ready(function() {
            $( t ) .find( ".form-control" ).prop( "readonly" , true );
            Toast.fire({
                icon: 'warning',
                title: 'Espere, enviando'
            });
            grecaptcha.execute("{{ $data[ 'empresa' ]->captcha[ 'public' ] }}", {action: 'contact'}).then( function( token ) {
                formData.append( "token", token );
                axios({
                    method: method,
                    url: url,
                    data: formData,
                    responseType: 'json',
                    config: { headers: {'Content-Type': 'multipart/form-data' }}
                })
                .then((res) => {
                    if( parseInt( res.data.estado ) ) {
                        Toast.fire({
                            icon: 'success',
                            title: res.data.mssg
                        });
                        location.reload();
                    } else {
                        $( ".form-control" ).prop( "readonly" , false );
                        Toast.fire({
                            icon: 'error',
                            title: res.data.mssg
                        });
                    }
                })
                .catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: 'Ocurrió un error'
                    });
                })
                .then(() => {});
            });
        });
    };
    siguiente = function(t,tt) {
        if(tt) {
            if( $("#nombre").val() == "" || $("#email").val() == "" ) {
                Toast.fire({
                    icon: 'error',
                    title: 'Complete Nombre y Correo elctrónico'
                });
                return false;
            }
            if( !$("#email").is(":valid") ) {
                Toast.fire({
                    icon: 'error',
                    title: 'Correo elctrónico no válido'
                });
                return false;
            }
            document.getElementById( "e_1" ).classList.toggle("d-none", true);
            document.getElementById( "step_1" ).classList.toggle("disabled", true);

            document.getElementById( "e_2" ).classList.toggle("d-none", false);
            document.getElementById( "step_2" ).classList.toggle("disabled", false);
        } else {
            document.getElementById( "e_1" ).classList.toggle("d-none", false);
            document.getElementById( "step_1" ).classList.toggle("disabled", false);

            document.getElementById( "e_2" ).classList.toggle("d-none", true);
            document.getElementById( "step_2" ).classList.toggle("disabled", true);
        }
    };
</script>
@endpush