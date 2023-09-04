<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;
    protected $table= "egresos";
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
