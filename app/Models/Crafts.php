<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crafts extends Model
{
    protected $table = 'crafts';
    protected $fillable = [
        'name',
        'aName',
        'map',
        'det',
        'ADet'
    ];
}
