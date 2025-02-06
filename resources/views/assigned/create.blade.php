@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Assigned
@endsection

@section('content')
<section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row w-100 justify-content-center">
            <div class="col-md-9">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Assignacion</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('assigned.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('assigned.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
