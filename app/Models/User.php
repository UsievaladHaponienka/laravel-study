<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * This method is called when new model initializes
     * @return void
     */
    protected static function boot()
    {
        parent::boot(); //TODO debug

        //This is event which is filed when new user is created
        static::created(
            function($user) {
                $user->profile()->create(
                    [
                        'title' => $user->username //Set Username as profile title when new user is created
                    ]
                );
            });
    }

    //User-profile relation
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class); //creation relation between user and profile model
    }

    //User-post relation
    public function posts(): HasMany
    {
        return $this->hasMany(Posts::class)->orderBy('created_at' , 'DESC'); //Assign many posts to one user
    }

    public function following(): BelongsToMany //PROFILES that are followed by current USER
    {
        return $this->belongsToMany(Profile::class);
    }
}
