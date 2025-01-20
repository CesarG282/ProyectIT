@extends('layouts.app')

@section('template_title')
    Movement
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movement') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movement.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Movement Type</th>
										<th>Sent</th>
										<th>Address</th>
										<th>Date</th>
										<th>Shipping Medium</th>
										<th>Responsible</th>
										<th>Description</th>
										<th>Create</th>
										<th>Update</th>
										<th>Users Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movements as $movement)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movement->movement_type }}</td>
											<td>{{ $movement->sent }}</td>
											<td>{{ $movement->address }}</td>
											<td>{{ $movement->date }}</td>
											<td>{{ $movement->shipping_medium }}</td>
											<td>{{ $movement->responsible }}</td>
											<td>{{ $movement->description }}</td>
											<td>{{ $movement->create }}</td>
											<td>{{ $movement->update }}</td>
											<td>{{ $movement->users_id }}</td>

                                            <td>
                                                <form action="{{ route('movements.destroy',$movement->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movements.show',$movement->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movements.edit',$movement->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $movements->links() !!}
            </div>
        </div>
    </div>
@endsection
