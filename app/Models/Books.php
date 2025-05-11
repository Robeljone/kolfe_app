<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Libraries;

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

    public function libs()
    {
      return $this->hasOne(Libraries::class,foreignKey: 'id',localKey: 'libId');
    }
}
