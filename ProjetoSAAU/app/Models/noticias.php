<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'resumo',
        'corpo',
        'image',
        'updated_at',
    ];
}
