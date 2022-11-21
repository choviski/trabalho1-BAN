<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Servico extends Model
{
    protected $table = 'servicos';
    public $timestamps = false;

    protected $fillable = [
        'valor',
        'nome',
        'id_empregado'
    ];

    public function empregado(): BelongsTo
    {
        return $this->belongsTo(Empregado::class, 'id_empregado','id');
    }

    public function estadiaServico(): HasOne
    {
        return $this->hasOne(EstadiaHasServico::class, 'id_servico','id');
    }
}
