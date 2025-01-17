@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Members Attention
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Members Attention</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('members-attention.update', $membersAttention->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('members-attention.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
