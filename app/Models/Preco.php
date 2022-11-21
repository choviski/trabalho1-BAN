<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preco extends Model
{
    protected $table = 'precos';
    public $timestamps = false;

    protected $fillable = [
        'valor',
        'id_hotel',
        'id_tipo'
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id');
    }

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoQuarto::class, 'id_tipo', 'id');
    }
}
