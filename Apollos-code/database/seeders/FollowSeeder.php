<?php

namespace Database\Seeders;

use App\Models\Follower;
use App\Models\LikeAlbum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artistas seguidos - 1
        $TamImpFollow = new Follower();
        $TamImpFollow->user_id = '11';
        $TamImpFollow->follower_id = '4';
        $TamImpFollow->save();

        // Artistas seguidos - 2
        $CucoFollow = new Follower();
        $CucoFollow->user_id = '10';
        $CucoFollow->follower_id = '4';
        $CucoFollow->save();

        // Artistas seguidos - 3
        $weekndFollow = new Follower();
        $weekndFollow->user_id = '12';
        $weekndFollow->follower_id = '4';
        $weekndFollow->save();
    }
}
