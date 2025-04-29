<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CraftLists extends Model
{
    protected $table = 'craft_lists';
    protected $fillable = [
        'rid',
        'name',
        'aName',
    ];
}
