<?php

namespace App\Http\Controllers;

use App\Models\User;

/**
 * This controller was generated using command "php artisan make:controller ProfilesController"
 */
class ProfilesController extends Controller
{
    public function index(User $user) //If arg name is same as in route, Laravel can resolve it and find user
    {
        return view('profile.index', compact('user')); // Using compact PHP function to pass user to view
    }

    public function edit( User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {

    }
}
