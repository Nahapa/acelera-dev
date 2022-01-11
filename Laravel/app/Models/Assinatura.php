<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $fillable = ['quantidade_caracteres', 'padrao', 'numero_vezes_usada'];
}
