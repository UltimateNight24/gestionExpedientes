<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expediente extends Model
{
    //
    use SoftDeletes;
    protected $table = 'expedientes';
    protected $guarded = [];

    public function estatus(){
        return $this->belongsTo(estatus::class,'id_estatus');
    }
    public function usuario(){
        return $this->belongsTo(User::class,'id_usuario_registra');
    }
}
