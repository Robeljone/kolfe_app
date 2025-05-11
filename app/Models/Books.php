<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table ='books';

    protected $fillable = [
      'libid',
      'name',
      'aName',
      'aut',
      'aAut',
      'img',
      'file'  
    ];
}
