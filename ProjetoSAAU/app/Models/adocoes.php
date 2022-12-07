<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adocoes extends Model
{
    use HasFactory;
    protected $table = 'adocoes';
    protected $fillable = [
        'nome',
        'contato',
        'data',
        'interesse',
        'updated_at',
    ];
}
