<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * This class was created using command "php artisan make:model -m Profile"
 * "-m" flag stands for --migrations, so command also creates migration file
 * in database/migrations/<timestamp>_create_profiles_table
 */
class Profile extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'image'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class); // Creating relation between user and profile model
    }

    public function profileImage(): ?string
    {
        $imagePath = ($this->image) ?
            $this->image :
            'profile/D9XNtYm33nO7XWmDK429GDkuvDLNoxKyWs6k90Xs.png';
        return '/storage/' . $imagePath;

    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
