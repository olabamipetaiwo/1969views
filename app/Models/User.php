<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use Notifiable;
    protected $table = 'users';

    protected $fillable = [
        'name','email','password'
    ];
    protected $hidden = [
        'passowrd','remember_token'
    ];
}
