<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $table = 'destinations';
    protected $fillable = [
        'type',
        'name',
        'disc',
    ];
}
