<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtNews extends Model
{
    protected $table = 'art_news';
    protected $fillable = [
        'title',
        'aTitle',
        'aut',
        'aAut',
        'det',
        'ADet'
    ];
}
