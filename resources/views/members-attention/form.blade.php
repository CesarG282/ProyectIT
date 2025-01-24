<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $membersAttention?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="members_id" class="form-label">{{ __('Usuario') }}</label>
            <select name="members_id" class="form-control @error('members_id') is-invalid @enderror" id="members_id">
                <option value="">Seleccione un Miembro</option> <!-- Opción vacía para seleccionar -->
                @foreach($members as $member)
                    <option value="{{ $member->id }}" {{ old('members_id') == $member->id ? 'selected' : '' }}>
                        {{ $member->name }}  <!-- Aquí estamos mostrando el 'name' del miembro -->
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