<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EstadiaHasServico extends Model
{
    protected $table = 'estadia_has_servicos';
    public $timestamps = false;

    protected $fillable = [
        'data_hora',
        'id_servico',
        'id_estadia'
    ];

    public function servico(): BelongsTo
    {
        return $this->belongsTo(Servico::class, 'id_servico','id');
    }

    public function estadia(): BelongsTo
    {
        return $this->belongsTo(Estadia::class, 'id_estadia','id');
    }
}
