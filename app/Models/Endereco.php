<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Endereco extends Model
{
    protected $table = 'enderecos';
    public $timestamps = false;

    protected $fillable = [
        'rua',
        'numero',
        'bairro',
        'cep',
        'cidade',
        'complemento'
    ];

    public function cliente(): HasOne
    {
        return $this->HasOne(Cliente::class, 'id_endereco','id');
    }

    public function hotel(): HasOne
    {
        return $this->HasOne(Hotel::class, 'id_endereco', 'id');
    }
}
