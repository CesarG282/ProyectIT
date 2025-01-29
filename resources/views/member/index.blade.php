@extends('layouts.app')

@section('template_title')
    {{ __('Usuarios') }}
@endsection
<!-- Bootstrap Icons (opcional para íconos adicionales) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

@section('content')

<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>{{ __('Usuarios') }}</span>
            <a href="{{ route('members.create') }}" class="btn btn-primary btn-sm">
                {{ __('Crear Nuevo') }}
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Idshart</th>
                            <th>Correo Corporativo</th>
                            <th>Contacto</th>
                            <th>Area</th>
                            <th>Localidad</th>
                            <th>Empresa</th>
                            <th>Administrador</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->idshart }}</td>
                                <td>{{ $member->corporate_mail }}</td>
                                <td>{{ $member->contact }}</td>
                                <td>{{ $member->area }}</td>
                                <td>{{ $member->locality }}</td>
                                <td>{{ $member->company }}</td>
                                <td>{{ $member->user->name ?? 'No user assigned' }}</td>
                                <td>
                                    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('members.show', $member->id) }}">
                                            <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                        </a>
                                        <a class="btn btn-sm btn-success" href="{{ route('members.edit', $member->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
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
    {!! $members->links() !!}
</div>

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
