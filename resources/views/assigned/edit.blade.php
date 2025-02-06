@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Assigned
@endsection

@section('content')
<section class="content container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="row w-100 justify-content-center">
            <div class="col-md-9">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Assigned</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('assigned.update', $assigned->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('assigned.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
