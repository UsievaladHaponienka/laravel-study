<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //This array defines which fields are allowed to be saved.
    protected $fillable = [
        'caption',
        'image'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
