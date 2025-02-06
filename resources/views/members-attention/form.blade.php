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
                <option value="">Seleccione un Usuario</option>
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
