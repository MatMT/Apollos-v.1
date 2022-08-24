<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    use HasFactory;

    // INPUTS ó Campos a recibir ================

    public $fillable = [
        'password_actual',
        'password',
        'confirm_password',
        'new_name',
        'new_lastname',
        'new_username',
        'new_artname'
    ];
}
