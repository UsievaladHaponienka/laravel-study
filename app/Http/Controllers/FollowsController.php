<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        //Assign or de-assign authenticated user to current profile
        //We need to call method following() here as it returns Relation object. Calling user()->following will return
        //Profiles collection
        return auth()->user()->following()->toggle($user->profile->id);
    }
}
