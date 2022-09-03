<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
        $mati->image = 'dbebb47d-ffd1-4f56-8217-d112f0ee49a4.png';
        // $mati->image = '324aecfb-ab22-49de-8c1b-d24df475d3ca.jpg';
        $mati->save();

        // Usuario Default - 2
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
        $willy->image = 'ac0a0d63-c397-42d5-bb78-2a77047f2dad.jpg';
        $willy->birth_date = '2004-12-30';
        $willy->save();

        // Usuario Default - 3
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
        $aero->image = 'c3cf38c7-e997-4f50-864c-eb8e4f3e1719.jpg';
        $aero->save();

        // Usuario Default - 4
        $marjo = new User();
        $marjo->name = 'Marjori';
        $marjo->last_name = 'Arguera';
        $marjo->rol = 'artist';
        $marjo->email = 'marjo@correo.com';
        $marjo->username = 'Majowo';
        $marjo->status = 'active';
        $marjo->age = '17';
        $marjo->password = Hash::make('1234');
        $marjo->created_at = now();
        $marjo->updated_at = now();
        $marjo->name_artist = 'majowo';
        $marjo->gender = false;
        $marjo->birth_date = '2005-02-23';
        $marjo->image = '9f2d5f6e-9c90-43ee-909a-b758a71fbd0e.jpg';
        $marjo->save();

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
        $album->image = 'bcc4d798-3da3-4cf5-be78-68103c19f43f.jpg';
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
        $vini->image = 'b59ebcf0-af5f-4d07-ac15-82908ee86f1e.jpg';
        $vini->save();

        // Usuario Default - 7
        $vini = new User();
        $vini->name = 'Marcelo';
        $vini->last_name = 'Cruz';
        $vini->rol = 'artist';
        $vini->email = 'floppa@correo.com';
        $vini->username = 'Floppenko';
        $vini->status = 'active';
        $vini->age = '16';
        $vini->password = Hash::make('1234');
        $vini->created_at = now();
        $vini->updated_at = now();
        $vini->name_artist = 'floppenko';
        $vini->gender = false;
        $vini->birth_date = '2006-08-19';
        $vini->image = '3526eb1d-501a-4245-b33e-23823a3eee97.jpg';
        $vini->save();

        // Usuario Default - 8
        $vini = new User();
        $vini->name = 'Juan';
        $vini->last_name = 'Escobar';
        $vini->rol = 'artist';
        $vini->email = 'juanpa@correo.com';
        $vini->username = 'Juanzpa';
        $vini->status = 'active';
        $vini->age = '17';
        $vini->password = Hash::make('1234');
        $vini->created_at = now();
        $vini->updated_at = now();
        $vini->name_artist = 'matador';
        $vini->gender = false;
        $vini->birth_date = '2005-07-01';
        $vini->image = '3526eb1d-501a-4245-b33e-23823a3eee97.jpg';
        $vini->save();
    }
}
