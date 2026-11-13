<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'event_id', 'datetime'])]
class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function registration()
    {
        return $this->hasMany(Registration::class);
    }
}
