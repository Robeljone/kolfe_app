<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventBookings extends Model
{
   protected $table = 'event_bookings';
   protected $fillable = [
     'department_id',
     'event_place',
     'event_date',
     'event_time',
     'total_people',
     'rate_per',
     'plate_number',
     'event_mgr_name',
     'event_mgr_phone',
     'status'
   ];
}
