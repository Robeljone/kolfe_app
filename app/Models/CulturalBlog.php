<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CulturalBlog extends Model
{
    protected $table = 'cultural_value_blogs';

    protected $fillable = [
        'title',
        'aTitle',
        'aut',
        'aAut',
        'det',
        'ADet'
    ];

}
