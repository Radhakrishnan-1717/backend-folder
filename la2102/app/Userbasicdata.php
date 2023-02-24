<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbasicdata extends Model
{
   protected $fillable=['username','usermailid','userphonenumber'];
}
