<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model
{
    use HasFactory;

    public function user(){
        return  $this->belongsTo(User::class);
    }

    public function subcarpetas(){
        return  $this->hasMany(subcarpetas::class,'carpeta_id');
    }
}
