<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationMethod extends Model
{
    protected $primaryKey = 'consultationMethodID';

    protected $fillable = ['name'];
}
