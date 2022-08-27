<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(AlbumMatiSeeder::class);
        $this->call(SongMatiSeeder::class);

        $this->call(AlbumAeroSeeder::class);
        $this->call(SongAeroSeeder::class);

        // Fábricas
        // User::factory(10)->create();
        // Song::factory(50)->create();
    }
}
