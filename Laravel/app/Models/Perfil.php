<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    public static function perfil()
    {
        return (object) [
            'nome'  => 'Fabio Alvarenga Silva',
            'idade' => 26
        ];
    }
}
