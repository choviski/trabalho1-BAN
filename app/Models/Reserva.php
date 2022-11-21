<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reserva extends Model
{
    protected $table = "reservas";
    public $timestamps = false;

    protected $fillable = [
        'pago',
        'data_reserva',
        'data_check_in',
        'data_check_out',
        'id_cliente',
        'id_quarto',
    ];

    public function quarto(): BelongsTo
    {
        return $this->belongsTo(Quarto::class, 'id_quarto','id');
    }

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class,'id_cliente','id');
    }

    public function estadia(): HasOne
    {
        return $this->hasOne(Estadia::class,'id_reserva','id');
    }
}
