<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class Companyies extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = ['firstName','lastName','userName','email','password','phoneNumber','image'];
}
