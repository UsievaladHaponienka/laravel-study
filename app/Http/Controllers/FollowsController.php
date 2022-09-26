<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        //Assign or de-assign authenticated user to current profile
        //TODO debug
        return auth()->user()->following()->toggle($user->profile);
    }
}
