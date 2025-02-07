@extends('layouts.app')

@section('template_title')
    Generics Account
@endsection

@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">{{ __('Cuentas Genericas') }}</span>
                        <div class="float-right">
                            <a href="{{ route('generics-accounts.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table id="mytable" class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Area</th>
                                    <th>Responsable</th>
                                    <th>Cuenta</th>
                                    <th>Contraseña</th>
                                    <th>Sn Computador</th>
                                    <th>Marca Computador</th>
                                    <th>Administrador</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($genericsAccounts as $genericsAccount)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $genericsAccount->area }}</td>
                                        <td>{{ $genericsAccount->responsible }}</td>
                                        <td>{{ $genericsAccount->account }}</td>
                                        <td>{{ $genericsAccount->password }}</td>
                                        <td>{{ $genericsAccount->sn_computer }}</td>
                                        <td>{{ $genericsAccount->brand_computer }}</td>
                                        <td>{{ $genericsAccount->user->name }}</td>
                                        <td>
                                            <form action="{{ route('generics-accounts.destroy', $genericsAccount->id) }}" method="POST" class="formulario-eliminar">
                                                <a class="btn btn-sm btn-primary" href="javascript:void(0);" onclick="showGenericAccountDetail({{ $genericsAccount->id }})">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                </a>
                                                <a class="btn btn-sm btn-warning" href="{{ route('generics-accounts.edit', $genericsAccount->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $genericsAccounts->links() !!}
        </div>
    </div>
</div>

<!-- Modal para Detalle de Cuenta Generica -->
<div id="genericAccountDetailModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <div id="genericAccountDetailContent">
            <!-- Aquí se cargará el detalle de la cuenta generica -->
        </div>
    </div>
</div>

<style>
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: flex-end;
    z-index: 9999;
    transition: all 0.4s ease-in-out;
}

.modal-content {
    background: white;
    width: 90%;
    max-width: 600px;
    border-radius: 10px 10px 0 0;
    padding: 20px;
    animation: slideUp 0.4s ease-out;
    box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.3);
}

@keyframes slideUp {
    from {
        transform: translateY(100%);
    }
    to {
        transform: translateY(0);
    }
}

.close-btn {
    font-size: 24px;
    color: red;
    float: right;
    cursor: pointer;
}

/* Ocultar los módulos de la barra de navegación solo en el modal */
#genericAccountDetailModal .navbar-nav {
    display: none !important;

</style>

<script>
function showGenericAccountDetail(id) {
    fetch(`/generics-accounts/${id}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('genericAccountDetailContent').innerHTML = html;
            document.getElementById('genericAccountDetailModal').style.display = 'flex';
        })
        .catch(error => console.error('Error:', error));
}

function closeModal() {
    document.getElementById('genericAccountDetailModal').style.display = 'none';
}
</script>

<!-- CSS de Bootstrap 4 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

<!-- CSS de DataTables (con integración para Bootstrap 4) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

<!-- jQuery (necesario para DataTables) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Popper.js (necesario para Bootstrap) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<!-- DataTables JS con integración para Bootstrap 4 -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#mytable').DataTable({
            responsive: true,
            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                }
            }
        });
    });
</script>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Mostrar mensaje de éxito si se ha eliminado con éxito -->
    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire({
                title: "¡Eliminado!",
                text: "La cuenta ha sido eliminado con éxito.",
                icon: "success"
            });
        </script>
    @endif

    <!-- Alerta de confirmación antes de eliminar -->
    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault(); // Evitar que se envíe el formulario de inmediato
            Swal.fire({
                title: "¿Estás Seguro?",
                text: "Este dato se eliminará definitivamente",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, Eliminar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit(); // Enviar el formulario si el usuario confirma
                }
            });
        });
    </script>
@endsection