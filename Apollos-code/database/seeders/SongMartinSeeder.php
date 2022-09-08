<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongMartinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sencillos Pereira - Martin
        $pereiraSencillo1 = new Song();
        $pereiraSencillo1->album_id = 1;
        $pereiraSencillo1->sencillo = true;
        $pereiraSencillo1->name_song = '22 de Febrero';
        $pereiraSencillo1->time = '4:26';
        $pereiraSencillo1->genre = 'instrumental';
        $pereiraSencillo1->url = '979e2f2a-1c8f-4c32-915c-7ead6a8c7183.mp3';
        $pereiraSencillo1->image = 'eb51d46b-09ec-41f3-944a-0aae7c8a2a8a.jpg';
        $pereiraSencillo1->total = 188.63;
        $pereiraSencillo1->created_at = now();
        $pereiraSencillo1->updated_at = now();
        $pereiraSencillo1->save();

    }
}
