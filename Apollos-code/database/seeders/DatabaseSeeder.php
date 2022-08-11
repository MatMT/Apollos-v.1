<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Song;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Usuario Default - 1
        $mati = new User();
        $mati->name = 'Oscar';
        $mati->last_name = 'Elías';
        $mati->rol = 'artist';
        $mati->email = 'oscar@correo.com';
        $mati->username = 'Elias_MT';
        $mati->status = 'active';
        $mati->age = '17';
        $mati->password = Hash::make('1234');
        $mati->created_at = now();
        $mati->updated_at = now();
        $mati->name_artist = 'elias_mt';
        $mati->gender = false;
        $mati->birth_date = '2004-10-23';
        $mati->save();

        // Usuario Default - 2
        $mati = new User();
        $mati->name = 'Valeria';
        $mati->last_name = 'Fuentes';
        $mati->rol = 'artist';
        $mati->email = 'valeria@correo.com';
        $mati->username = 'Vale_M<3';
        $mati->status = 'active';
        $mati->age = '13';
        $mati->password = Hash::make('1234');
        $mati->created_at = now();
        $mati->updated_at = now();
        $mati->name_artist = 'vale_m<3';
        $mati->gender = true;
        $mati->birth_date = '2008-12-07';
        $mati->save();

        // Fábricas
        // User::factory(10)->create();
        // Song::factory(50)->create();
    }
}
