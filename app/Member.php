<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'memberID';

    protected $fillable = ['name', 'email', 'password', 'gender', 'dob', 'address', 'contactNumber', 'profilePicture', 'konWallet'];
}
