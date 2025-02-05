@extends('layouts.app')

@section('template_title')
    {{ $movement->name ?? __('Show') . " " . __('Movement') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Movement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('movement.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Movement Type:</strong>
                            {{ $movement->movement_type }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sent:</strong>
                            {{ $movement->sent }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Address:</strong>
                            {{ $movement->address }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Date:</strong>
                            {{ $movement->date }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Shipping Medium:</strong>
                            {{ $movement->shipping_medium }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Responsible:</strong>
                            {{ $movement->responsible }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Description:</strong>
                            {{ $movement->description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Users Id:</strong>
                            {{ $movement->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
