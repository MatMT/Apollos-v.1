<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongMatiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sencillo bbno$ - 1 - MATI
        $bbnoSencillo1 = new Song();
        $bbnoSencillo1->album_id = 1;
        $bbnoSencillo1->sencillo = true;
        $bbnoSencillo1->name_song = 'Help Herlsef';
        $bbnoSencillo1->time = '3:09';
        $bbnoSencillo1->genre = 'hip hop';
        $bbnoSencillo1->url = 'af9d899e-0e53-43e5-a069-49b9e757c8f0.mp3';
        $bbnoSencillo1->image = 'f759a8c5-493e-4d88-be29-278b60ce8553.jpg';
        $bbnoSencillo1->created_at = now();
        $bbnoSencillo1->updated_at = now();
        $bbnoSencillo1->save();

        // Sencillo bbno$ - 2 - MATI
        $bbnoSencillo2 = new Song();
        $bbnoSencillo2->album_id = 1;
        $bbnoSencillo2->sencillo = true;
        $bbnoSencillo2->name_song = 'I remember';
        $bbnoSencillo2->time = '3:25';
        $bbnoSencillo2->genre = 'hip hop';
        $bbnoSencillo2->url = '77feb4d2-a718-4544-96df-f2353e3e91fd.mp3';
        $bbnoSencillo2->image = '0b4366cb-de55-4a13-99e4-96aae5fc4329.jpg';
        $bbnoSencillo2->created_at = now();
        $bbnoSencillo2->updated_at = now();
        $bbnoSencillo2->save();

        // Álbum bbno$ - 1_1 - MATI
        $bbnoAlbum1 = new Song();
        $bbnoAlbum1->album_id = 2;
        $bbnoAlbum1->sencillo = false;
        $bbnoAlbum1->name_song = 'Resume';
        $bbnoAlbum1->time = '2:44';
        $bbnoAlbum1->genre = 'hip hop';
        $bbnoAlbum1->url = '26c944eb-84f4-441f-a3f2-28b0d8559b15.m4a';
        $bbnoAlbum1->image = '53806cbc-650a-458d-a9ee-614725b5a427.jpg';
        $bbnoAlbum1->total = 164.47;
        $bbnoAlbum1->created_at = now();
        $bbnoAlbum1->updated_at = now();
        $bbnoAlbum1->save();

        // Álbum bbno$ - 1_2 - MATI
        $bbnoAlbum2 = new Song();
        $bbnoAlbum2->album_id = 2;
        $bbnoAlbum2->sencillo = false;
        $bbnoAlbum2->name_song = 'Edamame';
        $bbnoAlbum2->time = '2:15';
        $bbnoAlbum2->genre = 'hip hop';
        $bbnoAlbum2->url = 'f6f39231-3a0e-4406-b676-918f3fa1c20f.m4a';
        $bbnoAlbum2->image = '53806cbc-650a-458d-a9ee-614725b5a427.jpg';
        $bbnoAlbum2->total = 134.65;
        $bbnoAlbum2->created_at = now();
        $bbnoAlbum2->updated_at = now();
        $bbnoAlbum2->save();

        // Álbum bbno$ - 1_3 - MATI
        $bbnoAlbum3 = new Song();
        $bbnoAlbum3->album_id = 2;
        $bbnoAlbum3->sencillo = false;
        $bbnoAlbum3->name_song = 'Yoga';
        $bbnoAlbum3->time = '2:38';
        $bbnoAlbum3->genre = 'hip hop';
        $bbnoAlbum3->url = 'dcd29a23-016a-4db2-bbed-76e315625c38.m4a';
        $bbnoAlbum3->image = '53806cbc-650a-458d-a9ee-614725b5a427.jpg';
        $bbnoAlbum3->total = 158.43;
        $bbnoAlbum3->created_at = now();
        $bbnoAlbum3->updated_at = now();
        $bbnoAlbum3->save();

        // ================================================================

        // Sencillo Cuco - 3 - MATI
        $CucoSencillo1 = new Song();
        $CucoSencillo1->album_id = 3;
        $CucoSencillo1->sencillo = true;
        $CucoSencillo1->name_song = 'Under The Sun';
        $CucoSencillo1->time = '3:39';
        $CucoSencillo1->genre = 'hip hop';
        $CucoSencillo1->url = '5fe9dc65-b9bd-4342-a27f-cca17834f5e7.mp3';
        $CucoSencillo1->image = '50063cf7-7722-4b97-a847-77bfbea2c247.jpg';
        $CucoSencillo1->created_at = now();
        $CucoSencillo1->updated_at = now();
        $CucoSencillo1->save();

        // Sencillo Cuco - 4 - MATI
        $CucoSencillo1 = new Song();
        $CucoSencillo1->album_id = 3;
        $CucoSencillo1->sencillo = true;
        $CucoSencillo1->name_song = 'Piel Canela';
        $CucoSencillo1->time = '1:43';
        $CucoSencillo1->genre = 'indie';
        $CucoSencillo1->url = 'ea7bcf9d-c95f-45c8-a8c3-13b9902c1324.mp3';
        $CucoSencillo1->image = 'ae201b80-c121-4b3d-aeac-b66d7a970c21.jpg';
        $CucoSencillo1->created_at = now();
        $CucoSencillo1->updated_at = now();
        $CucoSencillo1->save();

        // Álbum Cuco - 2_1 - MATI
        $CucoAlbum1 = new Song();
        $CucoAlbum1->album_id = 4;
        $CucoAlbum1->sencillo = false;
        $CucoAlbum1->name_song = 'Caution';
        $CucoAlbum1->time = '2:57';
        $CucoAlbum1->genre = 'indie';
        $CucoAlbum1->url = '56e6c937-8417-4bfa-ae68-40d1806ec834.mp3';
        $CucoAlbum1->image = '05a926af-5cda-4800-8138-441ae5bae12b.jpg';
        $CucoAlbum1->total = 177.42;
        $CucoAlbum1->created_at = now();
        $CucoAlbum1->updated_at = now();
        $CucoAlbum1->save();

        // Álbum Cuco - 2_2 - MATI
        $CucoAlbum2 = new Song();
        $CucoAlbum2->album_id = 4;
        $CucoAlbum2->sencillo = false;
        $CucoAlbum2->name_song = 'Fin Del Mundo';
        $CucoAlbum2->time = '2:54';
        $CucoAlbum2->genre = 'indie';
        $CucoAlbum2->url = '6d89c9a8-7224-4890-a9c4-8a35d7456cd9.mp3';
        $CucoAlbum2->image = '05a926af-5cda-4800-8138-441ae5bae12b.jpg';
        $CucoAlbum2->total = 174.16;
        $CucoAlbum2->created_at = now();
        $CucoAlbum2->updated_at = now();
        $CucoAlbum2->save();

        // Álbum Cuco - 2_3 - MATI
        $CucoAlbum3 = new Song();
        $CucoAlbum3->album_id = 4;
        $CucoAlbum3->sencillo = false;
        $CucoAlbum3->name_song = 'Sitting In The Corner';
        $CucoAlbum3->time = '3:52';
        $CucoAlbum3->genre = 'indie';
        $CucoAlbum3->url = 'ffa7d712-a8b9-456e-8acd-41467021f89c.mp3';
        $CucoAlbum3->image = '05a926af-5cda-4800-8138-441ae5bae12b.jpg';
        $CucoAlbum3->total = 232.33;
        $CucoAlbum3->created_at = now();
        $CucoAlbum3->updated_at = now();
        $CucoAlbum3->save();
    }
}
