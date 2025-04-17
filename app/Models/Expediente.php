<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expediente extends Model
{
    //
    use SoftDeletes;
    protected $table = 'expedientes';
    protected $guarded = [];
}
