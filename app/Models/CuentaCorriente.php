<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaCorriente extends Model
{
    use HasFactory;
    protected $table= "ingresos";
    protected $fillable = [
        "id",
        "inversionista_id",
        "saldo_final",
        "estado"
    ];

    public function inversionista(): BelongsTo {
        return $this->belongsTo(inversionista::class,"inversionista_id"); 
    }
}
