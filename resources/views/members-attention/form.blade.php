@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Members Attention
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Members Attention</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('members-attention.update', $membersAttention->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    <div class="form-group mb-2 mb20">
                                        <label for="description" class="form-label">{{ __('Descripcion de la Actividad') }}</label>
                                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $membersAttention->description ?? '') }}" id="description" placeholder="Description">
                                        {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>

                                    <div class="form-group mb-2 mb20">
                                        <label for="date" class="form-label">{{ __('Fecha') }}</label>
                                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $membersAttention->date ?? '') }}" id="date" placeholder="Date">
                                        {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>

                                    <div class="form-group mb-2 mb20">
                                        <label for="members_id" class="form-label">{{ __('Usuario') }}</label>
                                        <select name="members_id" class="form-control @error('members_id') is-invalid @enderror" id="members_id">
                                            <option value="">Seleccione un Usuario</option> <!-- Opción vacía para seleccionar -->
                                            @foreach($members as $member)
                                                <option value="{{ $member->id }}" {{ old('members_id', $membersAttention->members_id ?? '') == $member->id ? 'selected' : '' }}>
                                                    {{ $member->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('members_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-12 mt20 mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
