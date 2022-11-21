<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Usuario extends Model
{
    protected $table = 'usuarios';

    public $timestamps = false;

    protected $fillable = [
        'email',
        'login',
        'senha',
        'tipo'
    ];

    public function cliente(): HasOne
    {
        return $this->hasOne(Cliente::class,'id_usuario','id');
    }
}
