<?php

namespace Database\Seeders;

use App\Models\LikeAlbum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Artistas seguidos - 1
        $FantasyLike = new LikeAlbum();
        $FantasyLike->user_id = '4';
        $FantasyLike->album_id = '4';
        $FantasyLike->created_at = now();
        $FantasyLike->updated_at = now();
        $FantasyLike->save();

        // Artistas seguidos - 2
        $CurrentsLike = new LikeAlbum();
        $CurrentsLike->user_id = '4';
        $CurrentsLike->album_id = '6';
        $CurrentsLike->created_at = now();
        $CurrentsLike->updated_at = now();
        $CurrentsLike->save();

        // Artistas seguidos - 3
        $SlowRushLike = new LikeAlbum();
        $SlowRushLike->user_id = '4';
        $SlowRushLike->album_id = '7';
        $SlowRushLike->created_at = now();
        $SlowRushLike->updated_at = now();
        $SlowRushLike->save();

        // Artistas seguidos - 4
        $StarBoyLike = new LikeAlbum();
        $StarBoyLike->user_id = '4';
        $StarBoyLike->album_id = '9';
        $StarBoyLike->created_at = now();
        $StarBoyLike->updated_at = now();
        $StarBoyLike->save();
    }
}
