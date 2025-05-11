<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CulturalEvents extends Model
{
    protected $table = 'events_tables';
    protected $fillable = [
      'name',
      'aName',
      'desc',
      'aDesc',
      'place',
      'event_date',
      'status'
    ];
}
