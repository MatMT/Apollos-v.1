<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeders
        // $this->call(UserSeeder::class);
        // $this->call(ArtistSeeder::class);
        // $this->call(AlbumMatiSeeder::class);
        // $this->call(SongMatiSeeder::class);
        // $this->call(AlbumAeroSeeder::class);
        // $this->call(SongAeroSeeder::class);
        // $this->call(AlbumViniSeeder::class);
        // $this->call(SongViniSeeder::class);
        // $this->call(ExtraArtistSeeder::class);
        // $this->call(LikeAlbumSeeder::class);

        // Usuario Default - 1
        $mati = new User();
        $mati->name = 'Oscar';
        $mati->last_name = 'Elías';
        $mati->rol = 'artist';
        $mati->email = 'oscarmateoelias@gmail.com';
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

        // Admin por Default
        $admin = new User();
        $admin->name = 'Mateo';
        $admin->email = 'mateonintendo123@gmail.com';
        $admin->username = 'Admin01';
        $admin->rol = 'admin';
        $admin->password = Hash::make('20210113');
        $admin->save();

        // Fábricas
        // User::factory(10)->create();
        // Song::factory(50)->create();
    }
}
