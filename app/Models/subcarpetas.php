<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcarpetas extends Model
{
    use HasFactory;
    public function carpeta(){
        return $this->belongsTo(Carpeta::class);
    }

    public function EstadoFinanciero(){
        return $this->hasOne(EstadoFinanciero::class,'id_ef');
    }

    public function ActualizacionTributaria(){
        return $this->hasOne(ActualizacionTributaria::class,'id_at');
    }
}
