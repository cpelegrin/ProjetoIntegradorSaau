<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfilUsuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'foto_perfil',
        'cep',
        'logradouro',
        'num',
        'cidade',
        'profissao',
        'telefone',
        'sobremim'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}