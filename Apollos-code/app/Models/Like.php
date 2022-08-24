<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    // INPUTS ó Campos a recibir ================

    // Relación
    protected $fillable = ['user_id'];

    // RELACIÓNES ===============================

    // Relación inversa
}
