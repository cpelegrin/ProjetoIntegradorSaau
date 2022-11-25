<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animals extends Model
{
    use HasFactory;
    protected $table = 'animals';
    protected $fillable = [
        'nome',
        'sexo',
        'prontuario',
        'image',
        'updated_at',
    ];
}
