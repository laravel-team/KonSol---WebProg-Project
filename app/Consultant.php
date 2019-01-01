<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $primaryKey = 'consultantID';

    protected $fillable = ['name', 'email', 'password', 'gender', 'dob', 'address', 'corporate', 'contactNumber', 'profilePicture'];
}
