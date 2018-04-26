

    @csrf

    <div class="form-group row">
        <label for="nama_pelajar" class="col-sm-4 col-form-label text-md-right">{{ __('Nama Pelajar') }}</label>

        <div class="col-md-6">
            <input id="nama_pelajar" type="text" class="form-control{{ $errors->has('nama_pelajar') ? ' is-invalid' : '' }}" name="nama_pelajar" value="{{ old('nama_pelajar') }}"  autofocus>

            @if ($errors->has('nama_pelajar'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nama_pelajar') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="no_kp" class="col-sm-4 col-form-label text-md-right">{{ __('No MyKid') }}</label>

        <div class="col-md-6">
            <input id="no_kp" type="text" class="form-control{{ $errors->has('no_kp') ? ' is-invalid' : '' }}" name="no_kp" value="{{ old('no_kp') }}"  autofocus>

            @if ($errors->has('no_kp'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('no_kp') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="sijil_lahir" class="col-sm-4 col-form-label text-md-right">{{ __('Sijil Lahir') }}</label>

        <div class="col-md-6">
            <input id="nama_pelajar" type="text" class="form-control{{ $errors->has('sijil_lahir') ? ' is-invalid' : '' }}" name="sijil_lahir" value="{{ old('sijil_lahir') }}"  autofocus>

            @if ($errors->has('sijil_lahir'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('sijil_lahir') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="warganegara" class="col-sm-4 col-form-label text-md-right">{{ __('Warganegara') }}</label>

        <div class="col-md-6">
            <input id="warganegara" type="text" class="form-control{{ $errors->has('warganegara') ? ' is-invalid' : '' }}" name="warganegara" value="{{ old('warganegara') }}"  autofocus>

            @if ($errors->has('warganegara'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('warganegara') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="tarikh_lahir" class="col-sm-4 col-form-label text-md-right">{{ __('Tarikh Lahir') }}</label>

        <div class="col-md-6">
            <input id="tarikh_lahir" type="text" class="form-control{{ $errors->has('tarikh_lahir') ? ' is-invalid' : '' }}" name="tarikh_lahir" value="{{ old('tarikh_lahir') }}"  autofocus>

            @if ($errors->has('tarikh_lahir'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('tarikh_lahir') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="jantina" class="col-sm-4 col-form-label text-md-right">{{ __('Jantina') }}</label>

        <div class="col-md-6">

            <select name="jantina" class="form-control">
                <option value="lelaki">Lelaki</option>
                <option value="perempuan">Perempuan</option>
                <option value="ragu">Ragu</option>
            </select>

            @if ($errors->has('jantina'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('jantina') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat" class="col-sm-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

        <div class="col-md-6">
            <textarea name="alamat" class="form-control">
            </textarea>

            @if ($errors->has('alamat'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('alamat') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="gambar" class="col-sm-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

        <div class="col-md-6">
            <input id="gambar" type="file" autofocus>

            @if ($errors->has('gambar'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('gambar') }}</strong>
                </span>
            @endif
        </div>
    </div>

    @if ( $user->role == '2' )
    <div class="form-group row">
        <label for="status" class="col-sm-4 col-form-label text-md-right">{{ __('Status') }}</label>

        <div class="col-md-6">

            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="approve">Approve</option>
                <option value="reject">Reject</option>
            </select>

            @if ($errors->has('status'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>
    </div>
    @endif

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Hantar Permohonan
            </button>

        </div>
    </div>
