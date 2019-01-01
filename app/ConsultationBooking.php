<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationBooking extends Model
{
    protected $primaryKey = 'consultationBookingID';

    protected $fillable = ['memberID', 'consultantID', 'categoryID', 'consultationMethodID', 'consultationDate', 'consultationTime', 'duration', 'price', 'topic',  'location'];
}
