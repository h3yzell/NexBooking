<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'sport',
        'booking_date',
        'time_slot',
        'name',
        'matric_number',
        'email',
        'phone_number',
    ];
}
