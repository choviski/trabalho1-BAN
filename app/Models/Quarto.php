<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quarto extends Model
{
    protected $table = 'quartos';
    public $timestamps = false;

    protected $fillable = [
        'numero',
        'andar',
        'foto',
        'id_hotel',
        'id_tipo',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'id_hotel','id');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoQuarto::class,'id_tipo','id');
    }

    public function reserva(): HasOne
    {
        return $this->HasOne(Reserva::class, 'id_quarto','id');
    }

    public function estadia(): HasOne
    {
        return $this->hasOne(Estadia::class, 'id_quarto','id');
    }
}
