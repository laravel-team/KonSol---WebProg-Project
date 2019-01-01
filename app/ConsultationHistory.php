<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationHistory extends Model
{
    protected $primaryKey = 'consultationHistoryID';

    protected $fillable = ['memberID', 'consultantID', 'consultationDate', 'consultationTime', 'categoryName', 'topic', 'price', 'duration', 'location'];
}
