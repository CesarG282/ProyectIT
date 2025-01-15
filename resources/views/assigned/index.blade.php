@extends('layouts.app')

@section('template_title')
    Assigned
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Assigned') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Idassigned</th>
										<th>Status</th>
										<th>Type</th>
										<th>Brand</th>
										<th>Serie</th>
										<th>Model</th>
										<th>Stiker</th>
										<th>Monitor</th>
										<th>Keyboard</th>
										<th>Mouse</th>
										<th>Adaptador</th>
										<th>Description</th>
										<th>Create</th>
										<th>Update</th>
										<th>Members Idmembers</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assigneds as $assigned)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $assigned->idassigned }}</td>
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
											<td>{{ $assigned->create }}</td>
											<td>{{ $assigned->update }}</td>
											<td>{{ $assigned->members_idmembers }}</td>

                                            <td>
                                                <form action="{{ route('assigneds.destroy',$assigned->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('assigneds.show',$assigned->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('assigneds.edit',$assigned->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
            </div>
        </div>
    </div>
@endsection
