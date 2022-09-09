<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Album;

class ExtraArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ================================================================

        // Bad Bunny - MATI
        $BadBunnySencillos = new Album();
        $BadBunnySencillos->user_id = 18;
        $BadBunnySencillos->name_album = 'sencillos_bad_bunny';
        $BadBunnySencillos->sencillo = true;
        $BadBunnySencillos->confirm = true;
        $BadBunnySencillos->created_at = now();
        $BadBunnySencillos->updated_at = now();
        $BadBunnySencillos->save();

        $BadBunnyAlbum = new Album();
        $BadBunnyAlbum->user_id = 18;
        $BadBunnyAlbum->name_album = 'Un Verano Sin Ti';
        $BadBunnyAlbum->genre = 'reggaeton';
        $BadBunnyAlbum->image = '438ec736-a425-4a3c-a180-f52577e5f550.jpg';
        $BadBunnyAlbum->sencillo = false;
        $BadBunnyAlbum->duration = '19:25';
        $BadBunnyAlbum->confirm = true;
        $BadBunnyAlbum->created_at = now();
        $BadBunnyAlbum->updated_at = now();
        $BadBunnyAlbum->save();

        // ================================================================

        // Sencillo Bad Bunny - 5 - MATI
        $BadBunnySencillo1 = new Song();
        $BadBunnySencillo1->album_id = 18;
        $BadBunnySencillo1->sencillo = true;
        $BadBunnySencillo1->name_song = 'Yonaguni';
        $BadBunnySencillo1->time = '3:28';
        $BadBunnySencillo1->genre = 'reggaeton';
        $BadBunnySencillo1->url = '35b56f83-19ae-4103-bf9f-09563e0e00b2.mp3';
        $BadBunnySencillo1->image = '5842b5db-a01b-41a7-ba4f-45c86067ff29.jpg';
        $BadBunnySencillo1->total = 208.07;
        $BadBunnySencillo1->created_at = now();
        $BadBunnySencillo1->updated_at = now();
        $BadBunnySencillo1->save();

        // Álbum Bad Bunny - 6_1 - MATI
        $BadBunnyAlbum1 = new Song();
        $BadBunnyAlbum1->album_id = 19;
        $BadBunnyAlbum1->sencillo = false;
        $BadBunnyAlbum1->name_song = 'Después de la playa';
        $BadBunnyAlbum1->time = '3:50';
        $BadBunnyAlbum1->genre = 'reggaeton';
        $BadBunnyAlbum1->url = '24c3b35e-d040-49c0-a12d-ae4028542cea.mp3';
        $BadBunnyAlbum1->image = '57423623-2108-46f6-a19c-064ff220517c.jpg';
        $BadBunnyAlbum1->total = 230.45;
        $BadBunnyAlbum1->created_at = now();
        $BadBunnyAlbum1->updated_at = now();
        $BadBunnyAlbum1->save();

        $BadBunnyAlbum2 = new Song();
        $BadBunnyAlbum2->album_id = 19;
        $BadBunnyAlbum2->sencillo = false;
        $BadBunnyAlbum2->name_song = 'Tití me preguntó';
        $BadBunnyAlbum2->time = '4:04';
        $BadBunnyAlbum2->genre = 'reggaeton';
        $BadBunnyAlbum2->url = 'a6798ad3-a2a7-4592-8835-f60c0faf4ade.mp3';
        $BadBunnyAlbum2->image = '57423623-2108-46f6-a19c-064ff220517c.jpg';
        $BadBunnyAlbum2->total = 243.85;
        $BadBunnyAlbum2->created_at = now();
        $BadBunnyAlbum2->updated_at = now();
        $BadBunnyAlbum2->save();

        $BadBunnyAlbum3 = new Song();
        $BadBunnyAlbum3->album_id = 19;
        $BadBunnyAlbum3->sencillo = false;
        $BadBunnyAlbum3->name_song = 'Yo no soy celoso';
        $BadBunnyAlbum3->time = '3:51';
        $BadBunnyAlbum3->genre = 'reggaeton';
        $BadBunnyAlbum3->url = 'c850d563-099a-403c-87da-85f9619f5cd5.mp3';
        $BadBunnyAlbum3->image = '57423623-2108-46f6-a19c-064ff220517c.jpg';
        $BadBunnyAlbum3->total = 230.74;
        $BadBunnyAlbum3->created_at = now();
        $BadBunnyAlbum3->updated_at = now();
        $BadBunnyAlbum3->save();

        $BadBunnyAlbum4 = new Song();
        $BadBunnyAlbum4->album_id = 19;
        $BadBunnyAlbum4->sencillo = false;
        $BadBunnyAlbum4->name_song = 'Neverita';
        $BadBunnyAlbum4->time = '2:53';
        $BadBunnyAlbum4->genre = 'reggaeton';
        $BadBunnyAlbum4->url = '364d8d3e-32d4-40a8-9153-7c8ae2db9901.mp3';
        $BadBunnyAlbum4->image = '57423623-2108-46f6-a19c-064ff220517c.jpg';
        $BadBunnyAlbum4->total = 173.17;
        $BadBunnyAlbum4->created_at = now();
        $BadBunnyAlbum4->updated_at = now();
        $BadBunnyAlbum4->save();

        $BadBunnyAlbum5 = new Song();
        $BadBunnyAlbum5->album_id = 19;
        $BadBunnyAlbum5->sencillo = false;
        $BadBunnyAlbum5->name_song = 'Party';
        $BadBunnyAlbum5->time = '3:48';
        $BadBunnyAlbum5->genre = 'reggaeton';
        $BadBunnyAlbum5->url = 'd8349cda-a0a1-47ea-af44-74f7f1cdffd2.mp3';
        $BadBunnyAlbum5->image = '57423623-2108-46f6-a19c-064ff220517c.jpg';
        $BadBunnyAlbum5->total = 227.66;
        $BadBunnyAlbum5->created_at = now();
        $BadBunnyAlbum5->updated_at = now();
        $BadBunnyAlbum5->save();
    }
}
