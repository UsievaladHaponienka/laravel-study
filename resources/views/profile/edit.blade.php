@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="/profile/{{ $user->id }}">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row>">
                        <h1>{{ __('Edit profile') }}</h1>
                    </div>

                    <div class="row">
                        <label for="title" class="col-md-4 col-form-label">{{ __('Profile title') }}</label>

                        <input id="title"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') ?? $user->profile->title }}"
                               required
                               autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label">{{ __('Profile description') }}</label>

                        <input id="description"
                               type="text"
                               class="form-control-file @error('description') is-invalid @enderror"
                               name="description"
                               value="{{ old('description') ?? $user->profile->description }}"
                               required>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="url" class="col-md-4 col-form-label">{{ __('Profile url') }}</label>

                        <input id="url"
                               type="text"
                               class="form-control-file @error('url') is-invalid @enderror"
                               name="url"
                               value="{{ old('url') ?? $user->profile->url }}">

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Profile image') }}</label>

                        <input id="image"
                               type="file"
                               class="form-control-file @error('image') is-invalid @enderror"
                               name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">
                            {{__('Save profile')}}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
