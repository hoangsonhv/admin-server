<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Model implements AuthenticatableContract
{
    use HasFactory;

    use Authenticatable;

    protected $table = "admins";

    protected $guarded = "admin";

    protected $fillable = [
        "name",
        "email",
        "password",
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
