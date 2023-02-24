<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbasics extends Model
{
    protected $fillable = [
        'username', 'useremailid', 'userphonenumber',
    ];
}
