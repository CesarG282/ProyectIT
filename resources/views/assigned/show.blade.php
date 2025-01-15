@extends('layouts.app')

@section('template_title')
    {{ $assigned->name ?? __('Show') . " " . __('Assigned') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Assigned</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('assigneds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idassigned:</strong>
                            {{ $assigned->idassigned }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status:</strong>
                            {{ $assigned->status }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Type:</strong>
                            {{ $assigned->type }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Brand:</strong>
                            {{ $assigned->brand }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Serie:</strong>
                            {{ $assigned->serie }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Model:</strong>
                            {{ $assigned->model }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Stiker:</strong>
                            {{ $assigned->stiker }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Monitor:</strong>
                            {{ $assigned->monitor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Keyboard:</strong>
                            {{ $assigned->keyboard }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Mouse:</strong>
                            {{ $assigned->mouse }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Adaptador:</strong>
                            {{ $assigned->adaptador }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Description:</strong>
                            {{ $assigned->description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Create:</strong>
                            {{ $assigned->create }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Update:</strong>
                            {{ $assigned->update }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Members Idmembers:</strong>
                            {{ $assigned->members_idmembers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
