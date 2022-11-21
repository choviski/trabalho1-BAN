<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TipoQuarto extends Model
{
    protected $table = 'tipo_quartos';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cama_extra'
    ];

    public function preco(): HasOne
    {
        return $this->hasOne(Preco::class, 'id_tipo','id');
    }

    public function quarto(): HasOne
    {
        return $this->hasOne(Quarto::class,'id_tipo','id');
    }
}
