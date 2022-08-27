<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artist Default - 8 - MATI
        $bbno = new User();
        $bbno->name = 'Alexander';
        $bbno->last_name = 'Gumuchian';
        $bbno->rol = 'artist';
        $bbno->email = 'Bbno@correo.com';
        $bbno->username = 'Bbno$';
        $bbno->status = 'active';
        $bbno->age = '27';
        $bbno->password = Hash::make('4321');
        $bbno->created_at = now();
        $bbno->updated_at = now();
        $bbno->name_artist = 'bbno$';
        $bbno->gender = false;
        $bbno->birth_date = '1995-06-30';
        $bbno->image = 'a13a928a-5103-4a76-8b6d-96ca2c2d3c42.jpg';
        $bbno->save();

        // Artist Default - 9 - MATI
        $Cuco = new User();
        $Cuco->name = 'Omar';
        $Cuco->last_name = 'Banos';
        $Cuco->rol = 'artist';
        $Cuco->email = 'Cuco@correo.com';
        $Cuco->username = 'Cuco';
        $Cuco->status = 'active';
        $Cuco->age = '24';
        $Cuco->password = Hash::make('4321');
        $Cuco->created_at = now();
        $Cuco->updated_at = now();
        $Cuco->name_artist = 'cuco';
        $Cuco->gender = false;
        $Cuco->birth_date = '1998-06-26';
        $Cuco->image = 'a077f7dd-82b0-4671-b000-eb51fb3a3846.jpg';
        $Cuco->save();

        // Artist Default - 10
        $TwOnPi = new User();
        $TwOnPi->name = 'Tyler';
        $TwOnPi->last_name = 'Joseph';
        $TwOnPi->rol = 'artist';
        $TwOnPi->email = 'TwOnPi@correo.com';
        $TwOnPi->username = 'Twenty One Pilots';
        $TwOnPi->status = 'active';
        $TwOnPi->age = '33';
        $TwOnPi->password = Hash::make('4321');
        $TwOnPi->created_at = now();
        $TwOnPi->updated_at = now();
        $TwOnPi->name_artist = 'twenty-one-pilots';
        $TwOnPi->gender = false;
        $TwOnPi->birth_date = '1988-12-01';
        $TwOnPi->image = 'b709b455-25e0-481c-8b48-da1203e2824e.jpg';
        $TwOnPi->save();

        // Artist Default - 11
        $weeknd = new User();
        $weeknd->name = 'Abel';
        $weeknd->last_name = 'Makkonen';
        $weeknd->rol = 'artist';
        $weeknd->email = 'weeknd@correo.com';
        $weeknd->username = 'The Weeknd';
        $weeknd->status = 'active';
        $weeknd->age = '32';
        $weeknd->password = Hash::make('4321');
        $weeknd->created_at = now();
        $weeknd->updated_at = now();
        $weeknd->name_artist = 'the-weeknd';
        $weeknd->gender = false;
        $weeknd->birth_date = '1990-02-16';
        $weeknd->image = '8e17d442-457f-4324-99e3-b8afcff89a6c.jpg';
        $weeknd->save();

        // Artist Default - 12
        $tylercreat = new User();
        $tylercreat->name = 'Tyler';
        $tylercreat->last_name = 'Okonma';
        $tylercreat->rol = 'artist';
        $tylercreat->email = 'creator@correo.com';
        $tylercreat->username = 'Tyler the Creator';
        $tylercreat->status = 'active';
        $tylercreat->age = '31';
        $tylercreat->password = Hash::make('4321');
        $tylercreat->created_at = now();
        $tylercreat->updated_at = now();
        $tylercreat->name_artist = 'tyler-the-creator';
        $tylercreat->gender = false;
        $tylercreat->birth_date = '1991-03-06';
        $tylercreat->image = 'd90a2013-a0d6-4775-b8e4-b63c245bc6cd.jpg';
        $tylercreat->save();

        // Artist Default - 13
        $kanyewest = new User();
        $kanyewest->name = 'YE';
        $kanyewest->last_name = 'WEST';
        $kanyewest->rol = 'artist';
        $kanyewest->email = 'kanyew@correo.com';
        $kanyewest->username = 'Kanye West';
        $kanyewest->status = 'active';
        $kanyewest->age = '45';
        $kanyewest->password = Hash::make('4321');
        $kanyewest->created_at = now();
        $kanyewest->updated_at = now();
        $kanyewest->name_artist = 'kanye-west';
        $kanyewest->gender = false;
        $kanyewest->birth_date = '1977-06-05';
        $kanyewest->image = 'cb75620d-ba57-4178-be07-9b24cef9cd49.jpg';
        $kanyewest->save();
    }
}
