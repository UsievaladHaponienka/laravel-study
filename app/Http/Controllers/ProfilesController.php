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
        $user = User::find($userId); //Search for user in user table by id using App\Models\User model
        return view('home', [ //Pass an array of arguments to view file. Full view file name is home.blade.php
            'user' => $user
        ]);
    }
}
