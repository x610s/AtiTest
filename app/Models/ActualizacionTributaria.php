<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualizacionTributaria extends Model
{
    use HasFactory;

    protected $table = 'actualizaciones_tributarias';

    public function subcarpetas(){
        return $this->belongsTo(subcarpetas::class);
    }
}
