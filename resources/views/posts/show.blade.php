@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{ "/storage/" . $post->image }}" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                                 style="max-width: 45px">
                        </div>
                        <div class="px-3">
                            <div style="font-weight: bold" class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </div>
                        </div>
                        @cannot('update', $post->user->profile)
                            <follow-button user-id="{{ $post->user->id }}" follows="{{ $follows }}"></follow-button>
                        @endcannot
                    </div>
                    <hr>
                    <p>
                        <span style="font-weight: bold" class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span> {{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
