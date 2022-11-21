<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Estadia extends Model
{
    protected $table = 'estadias';
    public $timestamps = false;

    protected $fillable = [
        'data_check_in',
        'data_check_out',
        'id_cliente',
        'id_quarto',
        'id_reserva',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'id_cliente','id');
    }

    public function quarto(): BelongsTo
    {
        return $this->belongsTo(Quarto::class, 'id_quarto','id');
    }

    public function reserva(): BelongsTo
    {
        return $this->belongsTo(Reserva::class, 'id_reserva','id');
    }

    public function estadiaServico(): HasOne
    {
        return $this->hasOne(EstadiaHasServico::class,'id_estadia','id');
    }
}
