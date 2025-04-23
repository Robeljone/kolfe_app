<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heritages extends Model
{
    protected $table = 'heritages';

    protected $fillable = [
      'type',
      'name',
      'aName',
      'pLoc',
      'mLoc',
      'vid',
      'disc',
      'aDisc',
      'viewer'
    ];
}
