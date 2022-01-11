<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $fillable = ['qnt_caracteres', 'assinatura_default', 'qnt_de_uso'];
}
