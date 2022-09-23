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
   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class); // Creating relation between user and profile model
   }
}
