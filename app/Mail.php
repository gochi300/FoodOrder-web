<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'mail';

    protected $fillable = [ 'name', 'phone', 'email', 'subject', 'message'
    ];

}