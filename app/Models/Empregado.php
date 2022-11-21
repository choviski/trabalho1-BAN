<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Empregado extends Model
{
    protected $table = 'empregados';
    public $timestamps = false;

    protected $fillable = [
        'nome'
    ];

    public function servico(): HasOne
    {
        return $this->hasOne(Servico::class, 'id_empregado','id');
    }
}
