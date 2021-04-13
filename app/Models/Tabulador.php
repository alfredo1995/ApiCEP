<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabulador extends Model
{
    use HasFactory;

    protected $table = 'tabuladores';

    protected $fillable = [
        'nome',
        'idade',
        'cep',
        'endereco',
        'cidade',
        'uf',
        'teste',
    ];
}
