<?php

namespace SimpleBlog;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;

    public $table = 'users';

    public $fillable = [
        'first_name', 'last_name', 'email',
    ];
}
