<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CulturalEvents extends Model
{
    protected $table = 'events';
    protected $fillable = [
      'name',
      'aName',
      'det',
      'aDet',
      'loc',
      'aLoc',
      'date',
    ];
}
