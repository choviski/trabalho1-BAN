<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;


    protected $fillable = [
        'nome',
        'fone',
        'id_endereco',
        'id_usuario'
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class, 'id_endereco', 'id');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class,'id_usuario','id');
    }

    public function reserva(): HasOne
    {
        return $this->hasOne(Reserva::class, 'id_cliente', 'id');
    }

    public function estadia(): HasOne
    {
        return $this->hasOne(Estadia::class, 'id_cliente','id');
    }
}
