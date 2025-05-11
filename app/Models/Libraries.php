<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libraries extends Model
{
    protected $table = 'libraries';

    protected $fillable = [
        'name',
        'aName',
        'det',
        'aDet',
        'img',
        'map'
    ];
}
