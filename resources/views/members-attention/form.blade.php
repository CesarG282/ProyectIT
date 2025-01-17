<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="members_attentions" class="form-label">{{ __('Members Attentions') }}</label>
            <input type="text" name="members_attentions" class="form-control @error('members_attentions') is-invalid @enderror" value="{{ old('members_attentions', $membersAttention?->members_attentions) }}" id="members_attentions" placeholder="Members Attentions">
            {!! $errors->first('members_attentions', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $membersAttention?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Date') }}</label>
            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date', $membersAttention?->date) }}" id="date" placeholder="Date">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="create" class="form-label">{{ __('Create') }}</label>
            <input type="text" name="create" class="form-control @error('create') is-invalid @enderror" value="{{ old('create', $membersAttention?->create) }}" id="create" placeholder="Create">
            {!! $errors->first('create', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="update" class="form-label">{{ __('Update') }}</label>
            <input type="text" name="update" class="form-control @error('update') is-invalid @enderror" value="{{ old('update', $membersAttention?->update) }}" id="update" placeholder="Update">
            {!! $errors->first('update', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="members_idmembers" class="form-label">{{ __('Members Idmembers') }}</label>
            <input type="text" name="members_idmembers" class="form-control @error('members_idmembers') is-invalid @enderror" value="{{ old('members_idmembers', $membersAttention?->members_idmembers) }}" id="members_idmembers" placeholder="Members Idmembers">
            {!! $errors->first('members_idmembers', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>