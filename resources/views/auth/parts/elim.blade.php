<section class="my-3">
    <div class="container-fluid">
        <div class="table-responsive">
            <table id="tabla" class="table table-striped table-hover table-borderless mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th style="width:auto">TABLA</th>
                        <th style="width:auto">FECHA</th>
                        <th style="width:auto">DATA</th>
                        <th style="width:150px">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $data[ "imagenes" ] AS $i )
                    <tr data-id="{{ $i->id }}" data-model="imagen">
                        <td>Imágenes</td>
                        <td>{{ date( "d/m/Y h:i:s" , strtotime( $i->updated_at ) ) }}</td>
                        <td><a href="{{ asset( $i->image[ 'i' ] ) }}" target="blank" class="text-link">{{ $i->image[ 'i' ] }}<i class="fas fa-external-link-alt ml-2"></i></a></td>
                        <td class="text-center">
                            <button data-toggle="tooltip" data-placement="left" style="font-size: 12px;" onclick="restaurar( this )" class="btn text-center rounded-0 btn-warning" data-original-title="Restaurar elemento"><i class="fas fa-history"></i></button>
                        </td>
                    </tr>
                    @endforeach
                    @foreach( $data[ "sliders" ] AS $i )
                    <tr data-id="{{ $i->id }}" data-model="imagen">
                        <td>Slider</td>
                        <td>{{ date( "d/m/Y h:i:s" , strtotime( $i->updated_at ) ) }}</td>
                        <td><strong class="mr-2">Sección:</strong>{{ $i->section }}<br/><a href="{{ asset( $i->image[ 'i' ] ) }}" target="blank" class="text-link">{{ $i->image[ 'i' ] }}<i class="fas fa-external-link-alt ml-2"></i></a></td>
                        <td class="text-center">
                            <button data-toggle="tooltip" data-placement="left" style="font-size: 12px;" onclick="restaurar( this )" class="btn text-center rounded-0 btn-warning" data-original-title="Restaurar elemento"><i class="fas fa-history"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@push('scripts')
<script>
    restaurar = ( t ) => {
        let id = $( t ).data( "id" );
        let model = $( t ).data( "model" );
        Swal.fire({
            title: "Atención!",
            text: "¿Está seguro de restaurar el registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',

            confirmButtonText: '<i class="fas fa-check"></i> Confirmar',
            confirmButtonAriaLabel: 'Confirmar',
            cancelButtonText: '<i class="fas fa-times"></i> Cancelar',
            cancelButtonAriaLabel: 'Cancelar'
        }).then( ( result ) => {
            if ( result.value ) {
                Toast.fire({
                    icon: 'warning',
                    title: 'Debe guardar el contenido para ver los cambios'
                })
            }
        });
    };
</script>
@endpush