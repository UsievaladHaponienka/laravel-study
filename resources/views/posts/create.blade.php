@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">

            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row>">
                        <h1>{{ __('Add new post') }}</h1>
                    </div>

                    <div class="row">
                        <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>

                        <input id="caption"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               name="caption"
                               value="{{ old('caption') }}"
                               required
                               autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>

                        <input id="image"
                               type="file"
                               class="form-control-file @error('image') is-invalid @enderror"
                               name="image"
                               required>

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">
                            {{__('Add new post')}}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
