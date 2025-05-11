<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestProperty extends Model
{
    protected $table = 'request_pro';
    protected $fillable = [
      'rqid',
      'name',
      'value'
    ];
}
