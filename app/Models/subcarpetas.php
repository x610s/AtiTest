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

    public function estadoFinanciero(){
        return $this->hasOne(EstadoFinanciero::class, 'id', 'id_ef');
    }

    public function actualizacionTributaria(){
        return $this->hasOne(ActualizacionTributaria::class, 'id', 'id_at');
    } 
}
