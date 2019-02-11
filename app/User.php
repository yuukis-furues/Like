<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'password',
    ];

    protected $hidden = [
        'name','password', 'remember_token',
    ];
}
