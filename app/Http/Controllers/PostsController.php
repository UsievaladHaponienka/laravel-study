<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //All actions in this controller will require authentification
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'caption' => ['required'],
            'image' => ['required', 'image']
        ]);

        /** @var UploadedFile $image */
        $image = \request('image');
        $imagePath = $image->store('uploads', 'public'); //Save image. Final path will be /storage/public/uploads

        auth()->user()->posts()->create([         //TODO debug this method
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect(route('profile.show', auth()->user()->id));


    }
}
