<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="movement_type" class="form-label">{{ __('Tipo de Movimiento') }}</label>
            <select name="movement_type" class="form-control @error('movement_type') is-invalid @enderror" id="movement_type">
                <option value="" disabled selected>{{ __('Select Movement Type') }}</option>
                <option value="envio" {{ old('movement_type') == 'envio' ? 'selected' : '' }}>{{ __('Envio') }}</option>
                <option value="recibido" {{ old('movement_type') == 'recibido' ? 'selected' : '' }}>{{ __('Recibido') }}</option>
            </select>
            @error('movement_type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="sent" class="form-label">{{ __('Elemento') }}</label>
            <input type="text" name="sent" class="form-control @error('sent') is-invalid @enderror" value="{{ old('sent', $movement?->sent) }}" id="sent" placeholder="Sent">
            {!! $errors->first('sent', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $movement?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $movement?->date) }}" id="date" placeholder="Date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shipping_medium" class="form-label">{{ __('Medio de envio') }}</label>
            <input type="text" name="shipping_medium" class="form-control @error('shipping_medium') is-invalid @enderror" value="{{ old('shipping_medium', $movement?->shipping_medium) }}" id="shipping_medium" placeholder="Shipping Medium">
            {!! $errors->first('shipping_medium', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="responsible" class="form-label">{{ __('Responsible') }}</label>
            <input type="text" name="responsible" class="form-control @error('responsible') is-invalid @enderror" value="{{ old('responsible', $movement?->responsible) }}" id="responsible" placeholder="Responsible">
            {!! $errors->first('responsible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $movement?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Administrador') }}</label>
            <select name="users_id" class="form-control @error('users_id') is-invalid @enderror" id="users_id">
                <option value="" disabled selected>{{ __('Select a user') }}</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('users_id', $movement?->users_id) == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
                @endforeach
            </select>
            {!! $errors->first('users_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
   
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary btn-submit">{{ __('Submit') }}</button>
    </div>
    
</div>
<style>
    /* Centrar los campos de entrada */
    .form-control {
        width: 90%; /* Reduce el largo de los campos */
        height: 42px; /* Aumenta el alto de los campos */
        margin-bottom: 15px; /* Añade un margen inferior */
        margin-left: auto;  /* Centra el campo de formulario horizontalmente */
        margin-right: auto; /* Centra el campo de formulario horizontalmente */
    }
    /* Centrar las etiquetas de los campos con un margen y padding */
    .form-label {
        display: block; /* Hace que las etiquetas ocupen el 100% de su contenedor */
        width: 100%; /* Hace que las etiquetas ocupen todo el ancho disponible */
        margin-bottom: 10px; /* Margen debajo de las etiquetas */
        padding-left: 5%; /* Espacio a la izquierda de la etiqueta */
        padding-right: 20px; /* Espacio a la derecha de la etiqueta */
    }

    /* Estilo para centrar el botón y que tenga el mismo tamaño que los campos del formulario */
    .btn-submit {
        margin-left: 50%; /* Centra el botón horizontalmente */
        margin-right: auto; /* Centra el botón horizontalmente */
        margin-top: 15px; /* Añade un margen superior para separarlo de los campos */
    }
</style>
