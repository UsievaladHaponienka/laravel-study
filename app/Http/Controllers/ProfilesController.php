<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * This controller was generated using command "php artisan make:controller ProfilesController"
 */
class ProfilesController extends Controller
{
    public function index($userId)
    {
        //Search for user in user table by id using App\Models\User model
        // @findOrFail method returns 404 error if user wasn't found
        $user = User::findOrFail($userId);

        return view('profile.index', [ //Pass an array of arguments to view file. Full view file name is home.blade.php
            'user' => $user
        ]);
    }
}
