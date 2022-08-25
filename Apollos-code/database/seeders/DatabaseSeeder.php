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

        $javi = new User();
        $javi->name = 'Javier';
        $javi->last_name = 'Mejía';
        $javi->rol = 'artist';
        $javi->email = 'javier@correo.com';
        $javi->username = 'Javithor69';
        $javi->status = 'active';
        $javi->age = '17';
        $javi->password = Hash::make('1234');
        $javi->created_at = now();
        $javi->updated_at = now();
        $javi->name_artist = 'javithor69';
        $javi->gender = false;
        $javi->birth_date = '2004-11-15';
        $javi->save();

        // Usuario Default - 3
        $willy = new User();
        $willy->name = 'William';
        $willy->last_name = 'Orellana';
        $willy->rol = 'artist';
        $willy->email = 'william@correo.com';
        $willy->username = 'Willito234';
        $willy->status = 'active';
        $willy->age = '17';
        $willy->password = Hash::make('1234');
        $willy->created_at = now();
        $willy->updated_at = now();
        $willy->name_artist = 'willito234';
        $willy->gender = false;
        $willy->birth_date = '2004-12-30';
        $willy->save();

        // Usuario Default - 4
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

        // Usuario Default - 5

        $album = new User();
        $album->name = 'Alvin';
        $album->last_name = 'Meléndez';
        $album->rol = 'artist';
        $album->email = 'album@correo.com';
        $album->username = 'Albumneitor';
        $album->status = 'active';
        $album->age = '16';
        $album->password = Hash::make('1234');
        $album->created_at = now();
        $album->updated_at = now();
        $album->name_artist = 'albumneitor';
        $album->gender = false;
        $album->birth_date = '2005-11-9';
        $album->save();

        // Usuario Default - 6

        $vini = new User();
        $vini->name = 'Victor';
        $vini->last_name = 'García';
        $vini->rol = 'artist';
        $vini->email = 'vini@correo.com';
        $vini->username = 'Vinilo';
        $vini->status = 'active';
        $vini->age = '16';
        $vini->password = Hash::make('1234');
        $vini->created_at = now();
        $vini->updated_at = now();
        $vini->name_artist = 'vinilo';
        $vini->gender = false;
        $vini->birth_date = '2005-08-16';
        $vini->save();

        // Fábricas
        User::factory(10)->create();
        // Song::factory(50)->create();
    }
}
