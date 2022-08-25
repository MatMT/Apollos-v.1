<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // INPUTS ó Campos a recibir ===================

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'rol',
        'name_artist', // Input modificada
        'gender',
        'age',
        'birth_date',
        'username'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // CAMPOS ===================================

    public static function obtenerName($id)
    {
        // Obtener nombre mediante id
        $nombre = User::find($id);
        return  $nombre->name;
    }

    public static function obtenerArtistName($id)
    {
        // Obtener nombre mediante id
        $nombre = User::find($id);
        return  $nombre->username;
    }

    // RELACIÓNES ===============================

    // Relación
    public function albums()
    {
        // Un usuario tiene muchos albumes
        return $this->hasMany(Album::class);
    }

    // Relación
    public function likes()
    {
        // Un usuario puede tener/dar múltiples likes(favoritos)
        return $this->hasMany(Like::class);
    }

    // Relación inversa - Seguidores de un usuario
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
    }

    // Relación - Seguidos de un usuario
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
    }

    // Comprobrar si un usuario ya sigue a otro
    public function siguiendo(User $user)
    {
        // Acceder al método followers y comprobar si ya esta el registro en toda su colección
        return $this->followers->contains($user->id);
    }
}
