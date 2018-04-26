
    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
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
