

    @csrf

    <div class="form-group row">
        <label for="nama" class="col-sm-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-6">
            <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ count( $user ) ? $user->nama : old('nama') }}"  autofocus>

            @if ($errors->has('nama'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ count( $user ) ? $user->email : old('email') }}"  autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
        </div>
    </div>

    <div class="form-group row">
        <label for="telefon" class="col-sm-4 col-form-label text-md-right">{{ __('Telefon') }}</label>

        <div class="col-md-6">
            <input id="telefon" type="text" class="form-control{{ $errors->has('telefon') ? ' is-invalid' : '' }}" name="telefon" value="{{ count( $user ) ? $user->telefon : old('telefon') }}"  autofocus>

            @if ($errors->has('telefon'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('telefon') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="role" class="col-sm-4 col-form-label text-md-right">{{ __('Role') }}</label>

        <div class="col-md-6">

            @if ( count( $user ) )
            <select name="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}">
                @foreach ($roles as $item )
                <option value="{{ $item->id }}" {{ $user->role == $item->id ? 'selected=selected' : '' }}>{{ ucwords( $item->name ) }}</option>
                @endforeach
            </select>
            @else
            <select name="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}">
                @foreach ($roles as $item )
                <option value="{{ $item->id }}">{{ ucwords( $item->name ) }}</option>
                @endforeach
            </select>
            @endif

            @if ($errors->has('role'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('role') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Save
            </button>

        </div>
    </div>
