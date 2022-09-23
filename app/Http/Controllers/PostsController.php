<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //All actions in this controller will require authentication
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

        //Resize using Intervention library
        $image = Image::make(public_path("storage/" . $imagePath))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([         //TODO debug this method
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect(route('profile.show', auth()->user()->id));
    }

    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }
}
