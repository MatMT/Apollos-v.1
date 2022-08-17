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
        $aero = new User();
        $aero->name = 'Eleazar';
        $aero->last_name = 'Amaya';
        $aero->rol = 'artist';
        $aero->email = 'aero@correo.com';
        $aero->username = 'Aerium';
        $aero->status = 'active';
        $aero->age = '17';
        $aero->password = Hash::make('1234');
        $aero->created_at = now();
        $aero->updated_at = now();
        $aero->name_artist = 'aerium';
        $aero->gender = false;
        $aero->birth_date = '2004-08-31';
        $aero->save();

        // Fábricas
        User::factory(10)->create();
        // Song::factory(50)->create();
    }
}
