<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $member?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idshart" class="form-label">{{ __('Idshart') }}</label>
            <input type="text" name="idshart" class="form-control @error('idshart') is-invalid @enderror" value="{{ old('idshart', $member?->idshart) }}" id="idshart" placeholder="Idshart">
            {!! $errors->first('idshart', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="corporate_mail" class="form-label">{{ __('Corporate Mail') }}</label>
            <input type="text" name="corporate_mail" class="form-control @error('corporate_mail') is-invalid @enderror" value="{{ old('corporate_mail', $member?->corporate_mail) }}" id="corporate_mail" placeholder="Corporate Mail">
            {!! $errors->first('corporate_mail', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contact" class="form-label">{{ __('Contact') }}</label>
            <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact', $member?->contact) }}" id="contact" placeholder="Contact">
            {!! $errors->first('contact', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="area" class="form-label">{{ __('Area') }}</label>
            <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" value="{{ old('area', $member?->area) }}" id="area" placeholder="Area">
            {!! $errors->first('area', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="locality" class="form-label">{{ __('Locality') }}</label>
            <input type="text" name="locality" class="form-control @error('locality') is-invalid @enderror" value="{{ old('locality', $member?->locality) }}" id="locality" placeholder="Locality">
            {!! $errors->first('locality', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="company" class="form-label">{{ __('Company') }}</label>
            <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company', $member?->company) }}" id="company" placeholder="Company">
            {!! $errors->first('company', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Users') }}</label>
            <select name="users_id" class="form-control @error('users_id') is-invalid @enderror" id="users_id">
                <option value="" disabled selected>{{ __('Select a user') }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('users_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('users_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>