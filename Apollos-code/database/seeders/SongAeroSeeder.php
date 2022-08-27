<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongAeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //       ====================== > Tame Impala < ===========================
        // ====================== > Tame Impala: Sencillos < ===========================

        // Sencillo Tame Impala - 1 - AERO
        $TamImpSencillo1 = new Song();
        $TamImpSencillo1->album_id = 5;
        $TamImpSencillo1->sencillo = true;
        $TamImpSencillo1->name_song = 'Breathe Deeper ft. Lil Yachty';
        $TamImpSencillo1->time = '4:48';
        $TamImpSencillo1->genre = 'pop';
        $TamImpSencillo1->url = 'c24767e7-15bc-42d2-8a37-b0b356d8ad4d.mp3';
        $TamImpSencillo1->image = '5ea6989d-dbba-4e96-bf26-78c11a374927.jpg';
        $TamImpSencillo1->created_at = now();
        $TamImpSencillo1->updated_at = now();
        $TamImpSencillo1->save();

        // Sencillo Tame Impala - 2 - AERO
        $TamImpSencillo2 = new Song();
        $TamImpSencillo2->album_id = 5;
        $TamImpSencillo2->sencillo = true;
        $TamImpSencillo2->name_song = 'Patience';
        $TamImpSencillo2->time = '4:52';
        $TamImpSencillo2->genre = 'pop';
        $TamImpSencillo2->url = '72bde7d8-ff32-4314-a782-4c07a5808a4d.mp3';
        $TamImpSencillo2->image = 'c82c82f1-9fdf-41ce-a4da-8c2a17c525fb.jpg';
        $TamImpSencillo2->created_at = now();
        $TamImpSencillo2->updated_at = now();
        $TamImpSencillo2->save();

        // ====================== > Tame Impala: Álbumes < ===========================

        // Álbum Tame Impala - 1_1 - AERO
        $TamImpAlbum1 = new Song();
        $TamImpAlbum1->album_id = 6;
        $TamImpAlbum1->sencillo = false;
        $TamImpAlbum1->name_song = "Yes I'm Changing";
        $TamImpAlbum1->time = '4:32';
        $TamImpAlbum1->genre = 'pop';
        $TamImpAlbum1->url = 'ab2b8a2e-84ba-48cf-a399-0630ad868f09.mp3';
        $TamImpAlbum1->image = '08569cae-7613-4924-beed-f1d39440b7a6.jpg';
        $TamImpAlbum1->total = 271.75;
        $TamImpAlbum1->created_at = now();
        $TamImpAlbum1->updated_at = now();
        $TamImpAlbum1->save();

        // Álbum Tame Impala - 1_2 - AERO
        $TamImpAlbum2 = new Song();
        $TamImpAlbum2->album_id = 6;
        $TamImpAlbum2->sencillo = false;
        $TamImpAlbum2->name_song = "Love/Paranoia";
        $TamImpAlbum2->time = '3:07';
        $TamImpAlbum2->genre = 'pop';
        $TamImpAlbum2->url = 'b148686b-7cb5-4ff1-b7f1-60bdf2431b27.mp3';
        $TamImpAlbum2->image = '08569cae-7613-4924-beed-f1d39440b7a6.jpg';
        $TamImpAlbum2->total = 186.83;
        $TamImpAlbum2->created_at = now();
        $TamImpAlbum2->updated_at = now();
        $TamImpAlbum2->save();

        // Álbum Tame Impala - 1_3 - AERO
        $TamImpAlbum3 = new Song();
        $TamImpAlbum3->album_id = 6;
        $TamImpAlbum3->sencillo = false;
        $TamImpAlbum3->name_song = "New Person, Same Old Mistakes";
        $TamImpAlbum3->time = '6:04';
        $TamImpAlbum3->genre = 'pop';
        $TamImpAlbum3->url = '4ac7513a-a7ea-4c50-85d1-07f537ba7f13.mp3';
        $TamImpAlbum3->image = '08569cae-7613-4924-beed-f1d39440b7a6.jpg';
        $TamImpAlbum3->total = 364.30;
        $TamImpAlbum3->created_at = now();
        $TamImpAlbum3->updated_at = now();
        $TamImpAlbum3->save();

        // Álbum Tame Impala - 2_1 - AERO
        $TamImpAlbum4 = new Song();
        $TamImpAlbum4->album_id = 7;
        $TamImpAlbum4->sencillo = false;
        $TamImpAlbum4->name_song = "Instant Destiny";
        $TamImpAlbum4->time = '3:14';
        $TamImpAlbum4->genre = 'pop';
        $TamImpAlbum4->url = 'b6433863-6ba4-44eb-850d-f10ec247297b.mp3';
        $TamImpAlbum4->image = '08569cae-7613-4924-beed-f1d39440b7a6.jpg';
        $TamImpAlbum4->total = 193.75;
        $TamImpAlbum4->created_at = now();
        $TamImpAlbum4->updated_at = now();
        $TamImpAlbum4->save();

        // Álbum Tame Impala - 2_2 - AERO
        $TamImpAlbum5 = new Song();
        $TamImpAlbum5->album_id = 7;
        $TamImpAlbum5->sencillo = false;
        $TamImpAlbum5->name_song = "Bordeline";
        $TamImpAlbum5->time = '3:58';
        $TamImpAlbum5->genre = 'pop';
        $TamImpAlbum5->url = '0aaa8349-3021-41b8-86be-9e675ecc9274.mp3';
        $TamImpAlbum5->image = '08569cae-7613-4924-beed-f1d39440b7a6.jpg';
        $TamImpAlbum5->total = 237.87;
        $TamImpAlbum5->created_at = now();
        $TamImpAlbum5->updated_at = now();
        $TamImpAlbum5->save();

        // Álbum Tame Impala - 2_3 - AERO
        $TamImpAlbum6 = new Song();
        $TamImpAlbum6->album_id = 7;
        $TamImpAlbum6->sencillo = false;
        $TamImpAlbum6->name_song = "Is It True";
        $TamImpAlbum6->time = '3:58';
        $TamImpAlbum6->genre = 'pop';
        $TamImpAlbum6->url = '4b8ccd7b-b442-4abe-b0a8-f1d1bd592f35.mp3';
        $TamImpAlbum6->image = '08569cae-7613-4924-beed-f1d39440b7a6.jpg';
        $TamImpAlbum6->total = 238.18;
        $TamImpAlbum6->created_at = now();
        $TamImpAlbum6->updated_at = now();
        $TamImpAlbum6->save();

    }
}
