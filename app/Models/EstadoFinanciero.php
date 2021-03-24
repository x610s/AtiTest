<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoFinanciero extends Model
{
    use HasFactory;

    protected $table = 'estados_financieros';

    public function subcarpetas(){
        return $this->belongsTo(subcarpetas::class);
    }
}
