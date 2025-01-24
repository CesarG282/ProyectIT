@extends('layouts.app')

@section('template_title')
    Member
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('members.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Idshart</th>
										<th>Correo Corporativo</th>
										<th>Contacto</th>
										<th>Area</th>
										<th>Localidad</th>
										<th>Empresa</th>
										<th>Administrador </th>

                                        <th></th>
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
                                            <td>{{ $member->user->name ?? 'No user assigned' }}</td> <!-- Aquí se muestra el nombre del usuario -->

                                            <td>
                                            <td>
                                                <form action="{{ route('members.destroy',$member->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('members.show',$member->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('members.edit',$member->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $members->links() !!}
            </div>
        </div>
    </div>
@endsection
