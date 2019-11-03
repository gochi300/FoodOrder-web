<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAndroid extends Model
{
    protected $table = 'users_android';

    protected $fillable = [ 'fullName', 'nrcNumber', 'mobileNumber', 'dateOfBirth', 'password'
    ];

}