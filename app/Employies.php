<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employies extends Model
{
    protected $fillable = ['firstName','lastName','userName','email','password','phoneNumber','image'];
}
