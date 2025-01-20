@extends('layouts.app')

@section('template_title')
    {{ $member->name ?? __('Show') . " " . __('Member') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Member</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('members.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Idmembers:</strong>
                            {{ $member->idmembers }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Name:</strong>
                            {{ $member->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Idshart:</strong>
                            {{ $member->idshart }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Corporate Mail:</strong>
                            {{ $member->corporate_mail }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Contact:</strong>
                            {{ $member->contact }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Area:</strong>
                            {{ $member->area }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Locality:</strong>
                            {{ $member->locality }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Company:</strong>
                            {{ $member->company }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Create:</strong>
                            {{ $member->create }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Update:</strong>
                            {{ $member->update }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Users Id:</strong>
                            {{ $member->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
