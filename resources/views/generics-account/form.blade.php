<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="area" class="form-label">{{ __('Area') }}</label>
            <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" value="{{ old('area', $genericsAccount?->area) }}" id="area" placeholder="Area">
            {!! $errors->first('area', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="responsible" class="form-label">{{ __('Responsable') }}</label>
            <input type="text" name="responsible" class="form-control @error('responsible') is-invalid @enderror" value="{{ old('responsible', $genericsAccount?->responsible) }}" id="responsible" placeholder="Responsible">
            {!! $errors->first('responsible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="account" class="form-label">{{ __('Cuenta') }}</label>
            <input type="text" name="account" class="form-control @error('account') is-invalid @enderror" value="{{ old('account', $genericsAccount?->account) }}" id="account" placeholder="Account">
            {!! $errors->first('account', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password', $genericsAccount?->password) }}" id="password" placeholder="password">
            {!! $errors->first('password', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sn_computer" class="form-label">{{ __('Sn Computador') }}</label>
            <input type="text" name="sn_computer" class="form-control @error('sn_computer') is-invalid @enderror" value="{{ old('sn_computer', $genericsAccount?->sn_computer) }}" id="sn_computer" placeholder="Sn Computer">
            {!! $errors->first('sn_computer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="brand_computer" class="form-label">{{ __('Marca Computador') }}</label>
            <input type="text" name="brand_computer" class="form-control @error('brand_computer') is-invalid @enderror" value="{{ old('brand_computer', $genericsAccount?->brand_computer) }}" id="brand_computer" placeholder="Brand Computer">
            {!! $errors->first('brand_computer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Administrador') }}</label>
            <select name="users_id" class="form-control @error('users_id') is-invalid @enderror" id="users_id">
                <option value="" disabled selected>{{ __('Select a user') }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('users_id', $genericsAccount?->users_id) == $user->id ? 'selected' : '' }}>
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
