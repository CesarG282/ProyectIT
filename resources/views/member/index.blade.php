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
                                {{ __('Member') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('members.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idmembers</th>
										<th>Name</th>
										<th>Idshart</th>
										<th>Corporate Mail</th>
										<th>Contact</th>
										<th>Area</th>
										<th>Locality</th>
										<th>Company</th>
										<th>Create</th>
										<th>Update</th>
										<th>Users Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $member->idmembers }}</td>
											<td>{{ $member->name }}</td>
											<td>{{ $member->idshart }}</td>
											<td>{{ $member->corporate_mail }}</td>
											<td>{{ $member->contact }}</td>
											<td>{{ $member->area }}</td>
											<td>{{ $member->locality }}</td>
											<td>{{ $member->company }}</td>
											<td>{{ $member->create }}</td>
											<td>{{ $member->update }}</td>
											<td>{{ $member->users_id }}</td>

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
