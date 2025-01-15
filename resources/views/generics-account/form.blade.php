<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="idgenerics_accountscol" class="form-label">{{ __('Idgenerics Accountscol') }}</label>
            <input type="text" name="idgenerics_accountscol" class="form-control @error('idgenerics_accountscol') is-invalid @enderror" value="{{ old('idgenerics_accountscol', $genericsAccount?->idgenerics_accountscol) }}" id="idgenerics_accountscol" placeholder="Idgenerics Accountscol">
            {!! $errors->first('idgenerics_accountscol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sent" class="form-label">{{ __('Sent') }}</label>
            <input type="text" name="sent" class="form-control @error('sent') is-invalid @enderror" value="{{ old('sent', $genericsAccount?->sent) }}" id="sent" placeholder="Sent">
            {!! $errors->first('sent', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="responsible" class="form-label">{{ __('Responsible') }}</label>
            <input type="text" name="responsible" class="form-control @error('responsible') is-invalid @enderror" value="{{ old('responsible', $genericsAccount?->responsible) }}" id="responsible" placeholder="Responsible">
            {!! $errors->first('responsible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="account" class="form-label">{{ __('Account') }}</label>
            <input type="text" name="account" class="form-control @error('account') is-invalid @enderror" value="{{ old('account', $genericsAccount?->account) }}" id="account" placeholder="Account">
            {!! $errors->first('account', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sn_computer" class="form-label">{{ __('Sn Computer') }}</label>
            <input type="text" name="sn_computer" class="form-control @error('sn_computer') is-invalid @enderror" value="{{ old('sn_computer', $genericsAccount?->sn_computer) }}" id="sn_computer" placeholder="Sn Computer">
            {!! $errors->first('sn_computer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="brand_computer" class="form-label">{{ __('Brand Computer') }}</label>
            <input type="text" name="brand_computer" class="form-control @error('brand_computer') is-invalid @enderror" value="{{ old('brand_computer', $genericsAccount?->brand_computer) }}" id="brand_computer" placeholder="Brand Computer">
            {!! $errors->first('brand_computer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_username" class="form-label">{{ __('User Username') }}</label>
            <input type="text" name="user_username" class="form-control @error('user_username') is-invalid @enderror" value="{{ old('user_username', $genericsAccount?->user_username) }}" id="user_username" placeholder="User Username">
            {!! $errors->first('user_username', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Users Id') }}</label>
            <input type="text" name="users_id" class="form-control @error('users_id') is-invalid @enderror" value="{{ old('users_id', $genericsAccount?->users_id) }}" id="users_id" placeholder="Users Id">
            {!! $errors->first('users_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>