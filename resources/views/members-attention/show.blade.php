@extends('layouts.app')

@section('template_title')
    {{ $membersAttention->name ?? __('Show') . " " . __('Members Attention') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Informacion') }} Atencion Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('members-attention.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Description:</strong>
                            {{ $membersAttention->description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Date:</strong>
                            {{ $membersAttention->date }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Members Id:</strong>
                            {{ $membersAttention->members_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
