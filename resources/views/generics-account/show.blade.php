@extends('layouts.app')

@section('template_title')
    {{ $genericsAccount->name ?? __('Show') . " " . __('Generics Account') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Generics Account</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('generics-accounts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Sent:</strong>
                            {{ $genericsAccount->sent }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Responsible:</strong>
                            {{ $genericsAccount->responsible }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Account:</strong>
                            {{ $genericsAccount->account }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sn Computer:</strong>
                            {{ $genericsAccount->sn_computer }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Brand Computer:</strong>
                            {{ $genericsAccount->brand_computer }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Users Id:</strong>
                            {{ $genericsAccount->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
