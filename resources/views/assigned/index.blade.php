@extends('layouts.app')

@section('template_title')
    Assigned
@endsection

@section('content')
<br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('assigned.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Usuario</th>
										<th>Status</th>
										<th>Tipo</th>
										<th>Marca</th>
										<th>Serie</th>
										<th>Modelo</th>
										<th>Stiker</th>
										<th>Monitor</th>
										<th>Teclado</th>
										<th>Mouse</th>
										<th>Adaptador</th>
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assigneds as $assigned)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $assigned->member->name }}</td>  <!-- Cambié de members_id a member->name -->
											<td>{{ $assigned->status }}</td>
											<td>{{ $assigned->type }}</td>
											<td>{{ $assigned->brand }}</td>
											<td>{{ $assigned->serie }}</td>
											<td>{{ $assigned->model }}</td>
											<td>{{ $assigned->stiker }}</td>
											<td>{{ $assigned->monitor }}</td>
											<td>{{ $assigned->keyboard }}</td>
											<td>{{ $assigned->mouse }}</td>
											<td>{{ $assigned->adaptador }}</td>
											<td>{{ $assigned->description }}</td>

                                            <td>
                                                <form action="{{ route('assigned.destroy',$assigned->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('assigned.show',$assigned->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('assigned.edit',$assigned->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $assigneds->links() !!}

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
                

            </div>
        </div>
    </div>
@endsection
