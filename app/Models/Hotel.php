<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hotel extends Model
{
    protected $table = "hoteis";
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'fone',
        'id_endereco'
    ];

    public function endereco(): BelongsTo
    {
        return $this->belongsTo(Endereco::class, 'id_endereco', 'id');
    }

    public function preco(): HasOne
    {
        return $this->hasOne(Preco::class, 'id_hotel','id');
    }

    public function quarto(): HasOne
    {
        return $this->hasOne(Quarto::class, 'id_hotel', 'id');
    }
}
