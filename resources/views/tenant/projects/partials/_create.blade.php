<form method="POST" action="{{ route('projects.store') }}" class="form">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Project Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Create New One.') }}
            </button>
        </div>
    </div>
</form>