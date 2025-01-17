<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="idmovements" class="form-label">{{ __('Idmovements') }}</label>
            <input type="text" name="idmovements" class="form-control @error('idmovements') is-invalid @enderror" value="{{ old('idmovements', $movement?->idmovements) }}" id="idmovements" placeholder="Idmovements">
            {!! $errors->first('idmovements', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="movement_type" class="form-label">{{ __('Movement Type') }}</label>
            <input type="text" name="movement_type" class="form-control @error('movement_type') is-invalid @enderror" value="{{ old('movement_type', $movement?->movement_type) }}" id="movement_type" placeholder="Movement Type">
            {!! $errors->first('movement_type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sent" class="form-label">{{ __('Sent') }}</label>
            <input type="text" name="sent" class="form-control @error('sent') is-invalid @enderror" value="{{ old('sent', $movement?->sent) }}" id="sent" placeholder="Sent">
            {!! $errors->first('sent', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $movement?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Date') }}</label>
            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $movement?->date) }}" id="date" placeholder="Date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="shipping_medium" class="form-label">{{ __('Shipping Medium') }}</label>
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
            <label for="create" class="form-label">{{ __('Create') }}</label>
            <input type="text" name="create" class="form-control @error('create') is-invalid @enderror" value="{{ old('create', $movement?->create) }}" id="create" placeholder="Create">
            {!! $errors->first('create', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="update" class="form-label">{{ __('Update') }}</label>
            <input type="text" name="update" class="form-control @error('update') is-invalid @enderror" value="{{ old('update', $movement?->update) }}" id="update" placeholder="Update">
            {!! $errors->first('update', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Users Id') }}</label>
            <input type="text" name="users_id" class="form-control @error('users_id') is-invalid @enderror" value="{{ old('users_id', $movement?->users_id) }}" id="users_id" placeholder="Users Id">
            {!! $errors->first('users_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>