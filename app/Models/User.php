<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * Mass assignable fields
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * Fields hidden when serialized
     */
    protected $hidden = [
        'password',
    ];
}
