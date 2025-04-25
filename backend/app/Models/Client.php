<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $primary_key = 'user_id';
    protected $fillable = [
        'user_id',
        'username',
        'email',
    ];
    protected $hidden = [
        'password'
    ];
}
