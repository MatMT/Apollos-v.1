<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumAeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //       ====================== > Tame Impala < ===========================
        // Tame Impala - AERO
        $TamImpSencillos = new Album();
        $TamImpSencillos->user_id = 11;
        $TamImpSencillos->name_album = 'sencillos_tame-impala';
        $TamImpSencillos->sencillo = true;
        $TamImpSencillos->confirm = true;
        $TamImpSencillos->created_at = now();
        $TamImpSencillos->updated_at = now();
        $TamImpSencillos->save();

        $TamImpAlbum1 = new Album();
        $TamImpAlbum1->user_id = 11;
        $TamImpAlbum1->name_album = 'Currents';
        $TamImpAlbum1->genre = 'pop';
        $TamImpAlbum1->image = '244ed6e5-94e7-4651-b261-55c0a372e319.png';
        $TamImpAlbum1->sencillo = false;
        $TamImpAlbum1->duration = '13:42';
        $TamImpAlbum1->confirm = true;
        $TamImpAlbum1->created_at = now();
        $TamImpAlbum1->updated_at = now();
        $TamImpAlbum1->save();

        $TamImpAlbum2 = new Album();
        $TamImpAlbum2->user_id = 11;
        $TamImpAlbum2->name_album = 'The Slow Rush';
        $TamImpAlbum2->genre = 'pop';
        $TamImpAlbum2->image = '616dedce-1495-43c6-a74c-22949148d919.jpg';
        $TamImpAlbum2->sencillo = false;
        $TamImpAlbum2->duration = '11:09';
        $TamImpAlbum2->confirm = true;
        $TamImpAlbum2->created_at = now();
        $TamImpAlbum2->updated_at = now();
        $TamImpAlbum2->save();

        //       ====================== > The Weeknd < ===========================
        // The Weeknd - AERO
        $weekndSencillos = new Album();
        $weekndSencillos->user_id = 12;
        $weekndSencillos->name_album = 'sencillos_the-weeknd';
        $weekndSencillos->sencillo = true;
        $weekndSencillos->confirm = true;
        $weekndSencillos->created_at = now();
        $weekndSencillos->updated_at = now();
        $weekndSencillos->save();

        $weekndAlbum = new Album();
        $weekndAlbum->user_id = 12;
        $weekndAlbum->name_album = 'Starboy';
        $weekndAlbum->genre = 'pop';
        $weekndAlbum->image = '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg';
        $weekndAlbum->sencillo = false;
        $weekndAlbum->duration = '12:01';
        $weekndAlbum->confirm = true;
        $weekndAlbum->created_at = now();
        $weekndAlbum->updated_at = now();
        $weekndAlbum->save();

        //       ====================== > Javithor < ===========================
        // Javithor - AERO
        $JavithorAlbum = new Album();
        $JavithorAlbum->user_id = 13;
        $JavithorAlbum->name_album = 'Dream Nostalgia';
        $JavithorAlbum->genre = 'pop';
        $JavithorAlbum->image = '5cf8dfad-b86b-49a1-831a-825c6a2b0949.jpg';
        $JavithorAlbum->sencillo = false;
        $JavithorAlbum->duration = '14:54';
        $JavithorAlbum->confirm = true;
        $JavithorAlbum->created_at = now();
        $JavithorAlbum->updated_at = now();
        $JavithorAlbum->save();
    }
}
