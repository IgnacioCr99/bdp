<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;
    protected $table= "ingresos";
    protected $fillable = [
        "id",
        "cuenta_corriente_id",
        "monto",
        "estado"
    ];

    public function cuentaCorriente(): BelongsTo {
        return $this->belongsTo(CuentaCorriente::class,"cuenta_corriente_id"); 
    }
}
