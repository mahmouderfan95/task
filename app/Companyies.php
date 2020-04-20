<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyies extends Model
{
    protected $fillable = ['firstName','lastName','userName','email','password','phoneNumber','image'];
}
