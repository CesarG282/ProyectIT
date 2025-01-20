@extends('layouts.app')

@section('template_title')
    Generics Account
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Generics Account') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('generics-accounts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Sent</th>
										<th>Responsible</th>
										<th>Account</th>
										<th>Sn Computer</th>
										<th>Brand Computer</th>
										<th>Create</th>
										<th>Update</th>
										<th>Users Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genericsAccounts as $genericsAccount)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $genericsAccount->sent }}</td>
											<td>{{ $genericsAccount->responsible }}</td>
											<td>{{ $genericsAccount->account }}</td>
											<td>{{ $genericsAccount->sn_computer }}</td>
											<td>{{ $genericsAccount->brand_computer }}</td>
											<td>{{ $genericsAccount->create }}</td>
											<td>{{ $genericsAccount->update }}</td>
											<td>{{ $genericsAccount->users_id }}</td>

                                            <td>
                                                <form action="{{ route('generics-accounts.destroy',$genericsAccount->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('generics-accounts.show',$genericsAccount->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('generics-accounts.edit',$genericsAccount->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $genericsAccounts->links() !!}
            </div>
        </div>
    </div>
@endsection
