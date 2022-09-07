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
        $this->call(UserSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(AlbumMatiSeeder::class);
        $this->call(SongMatiSeeder::class);
        $this->call(AlbumAeroSeeder::class);
        $this->call(SongAeroSeeder::class);
        $this->call(FollowSeeder::class);
        $this->call(LikeAlbumSeeder::class);

        // Admin por Default
        $admin = new User();
        $admin->name = 'Mateo';
        $admin->email = 'oscarmateoelias@gmail.com';
        $admin->username = 'Admin01';
        $admin->rol = 'admin';
        $admin->password = Hash::make('20210113');
        $admin->save();

        // Fábricas
        // User::factory(10)->create();
        // Song::factory(50)->create();
    }
}
