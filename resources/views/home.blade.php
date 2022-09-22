{{--@extends('layouts.app')--}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <div>
                    <img src="">
                </div>
            </div>
            <div class="col-9 p-5">
                <h1>{{ $user->username }}</h1> <?php #Get field 'username' of variable $user, variable was passed in controller ?>
                <div class="d-flex">
                    <div class="px-3"><strong>153</strong> posts</div>
                    <div class="px-3"><strong>23k</strong> followers</div>
                    <div class="px-3"><strong>212</strong> following</div>
                </div>
                <div class="pt-4"><strong>usievalad.haponienka@gmail.com</strong></div>
                <div>PHP developer at ItechArt Group</div>
                <div><a href="https://github.com/UsievaladHaponienka">My GitHub</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img class="w-100 h-100 pt-4" src="https://images.pexels.com/photos/1001682/pexels-photo-1001682.jpeg?cs=srgb&dl=pexels-kellie-churchman-1001682.jpg&fm=jpg">
            </div>
            <div class="col-4">
                <img class="w-100 h-100 pt-4" src="https://media.istockphoto.com/photos/perfect-sky-and-ocean-picture-id467367026?k=20&m=467367026&s=612x612&w=0&h=HBytXxkz31s-ZQrTwH3pbCy51Ep0SRScSXkChSUhYWk=">
            </div>
            <div class="col-4">
                <img class="w-100 h-100 pt-4" src="https://thumbs.dreamstime.com/b/sand-under-sea-abstract-marine-design-template-blue-deep-ocean-180905891.jpg">
            </div>
        </div>
    </div>
@endsection
