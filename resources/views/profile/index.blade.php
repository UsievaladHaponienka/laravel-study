@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{ $user->username }}</div> <?php #Get field 'username' of variable $user, variable was passed in controller ?>

                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button> <!-- user-id passes argument to component-->
                    </div>
                    <!-- Blade directive can. Shows link only if ProfilePolicy method `update1 returns true i.e.
                    user is viewing his own profile -->
                    @can('update', $user->profile)
                        <a href="{{ route('post.create') }}">Add new post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                @endcan
                <div class="d-flex">
                    <div class="px-0"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="px-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="px-5 "><strong>{{ $followingCount }}</strong> following</div>
                </div>
                    <?php // Dynamic content from profile model now can be used ?>
                <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pd-4">
                    <a href="/p/{{ $post->id }}">
                        <img class="w-100 h-100 pt-4" src="/storage/{{ $post->image }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
