<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="members_id" class="form-label">{{ __('Usuario') }}</label>
            <select name="members_id" class="form-control @error('members_id') is-invalid @enderror" id="members_id">
                <option value="">Seleccione un Usuario</option> <!-- Opción vacía para seleccionar -->
                @foreach($members as $user) <!-- Asegúrate que sea $members si pasas esa variable desde el controlador -->
                    <option value="{{ $user->id }}" {{ old('members_id', $assigned->members_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}  
                    </option>
                @endforeach
            </select>
            {!! $errors->first('members_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $assigned?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="type" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type', $assigned?->type) }}" id="type" placeholder="Type">
            {!! $errors->first('type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="brand" class="form-label">{{ __('Marca') }}</label>
            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand', $assigned?->brand) }}" id="brand" placeholder="Brand">
            {!! $errors->first('brand', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="serie" class="form-label">{{ __('Serie') }}</label>
            <input type="text" name="serie" class="form-control @error('serie') is-invalid @enderror" value="{{ old('serie', $assigned?->serie) }}" id="serie" placeholder="Serie">
            {!! $errors->first('serie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="model" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model', $assigned?->model) }}" id="model" placeholder="Model">
            {!! $errors->first('model', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="stiker" class="form-label">{{ __('Stiker') }}</label>
            <input type="text" name="stiker" class="form-control @error('stiker') is-invalid @enderror" value="{{ old('stiker', $assigned?->stiker) }}" id="stiker" placeholder="Stiker">
            {!! $errors->first('stiker', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monitor" class="form-label">{{ __('Monitor') }}</label>
            <input type="text" name="monitor" class="form-control @error('monitor') is-invalid @enderror" value="{{ old('monitor', $assigned?->monitor) }}" id="monitor" placeholder="Monitor">
            {!! $errors->first('monitor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="keyboard" class="form-label">{{ __('Teclado') }}</label>
            <input type="text" name="keyboard" class="form-control @error('keyboard') is-invalid @enderror" value="{{ old('keyboard', $assigned?->keyboard) }}" id="keyboard" placeholder="Keyboard">
            {!! $errors->first('keyboard', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mouse" class="form-label">{{ __('Mouse') }}</label>
            <input type="text" name="mouse" class="form-control @error('mouse') is-invalid @enderror" value="{{ old('mouse', $assigned?->mouse) }}" id="mouse" placeholder="Mouse">
            {!! $errors->first('mouse', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="adaptador" class="form-label">{{ __('Adaptador') }}</label>
            <input type="text" name="adaptador" class="form-control @error('adaptador') is-invalid @enderror" value="{{ old('adaptador', $assigned?->adaptador) }}" id="adaptador" placeholder="Adaptador">
            {!! $errors->first('adaptador', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $assigned?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary btn-submit">{{ __('Submit') }}</button>
    </div>
</div>

<style>
    .form-control {
        width: 95%; /* Reduce el largo de los campos */
        height: 42px; /* Aumenta el alto de los campos */
        margin-bottom: 15px; /* Añade un margen inferior */
    }

    .col-md-8 {
        max-width: 600px; /* Limita el ancho máximo del formulario */
    }
    .btn-submit {
        margin-left: 50%; /* Centra el botón horizontalmente */
        margin-right: auto; /* Centra el botón horizontalmente */
        margin-top: 15px; /* Añade un margen superior para separarlo de los campos */
    }
</style>