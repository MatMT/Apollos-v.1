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
        $TamImpAlbum1->image = '244ed6e5-94e7-4651-b261-55c0a372e319.png';
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
        $TamImpAlbum2->image = '244ed6e5-94e7-4651-b261-55c0a372e319.png';
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
        $TamImpAlbum3->image = '244ed6e5-94e7-4651-b261-55c0a372e319.png';
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
        $TamImpAlbum4->image = '616dedce-1495-43c6-a74c-22949148d919.jpg';
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
        $TamImpAlbum5->image = '616dedce-1495-43c6-a74c-22949148d919.jpg';
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
        $TamImpAlbum6->image = '616dedce-1495-43c6-a74c-22949148d919.jpg';
        $TamImpAlbum6->total = 238.18;
        $TamImpAlbum6->created_at = now();
        $TamImpAlbum6->updated_at = now();
        $TamImpAlbum6->save();


        //       ====================== > The Weeknd < ===========================
        // ====================== > The Weeknd: Sencillos < ===========================
        // Sencillo The Weeknd - 1 - AERO
        $weekndSencillo1 = new Song();
        $weekndSencillo1->album_id = 8;
        $weekndSencillo1->sencillo = true;
        $weekndSencillo1->name_song = 'Moth To A Flame';
        $weekndSencillo1->time = '3:54';
        $weekndSencillo1->genre = 'pop';
        $weekndSencillo1->url = '5501def9-5c09-4a23-ab34-c77a0b8b3d86.mp3';
        $weekndSencillo1->image = 'ded98a11-052c-4985-bf2a-a04e22211ad1.jpg';
        $weekndSencillo1->created_at = now();
        $weekndSencillo1->updated_at = now();
        $weekndSencillo1->save();

        // Sencillo The Weeknd - 2 - AERO
        $weekndSencillo2 = new Song();
        $weekndSencillo2->album_id = 8;
        $weekndSencillo2->sencillo = true;
        $weekndSencillo2->name_song = 'King Of The Fall';
        $weekndSencillo2->time = '5:02';
        $weekndSencillo2->genre = 'pop';
        $weekndSencillo2->url = '76a584d4-be43-46ea-9dff-035daeebfe07.mp3';
        $weekndSencillo2->image = '10a042cc-969d-4615-ab40-9ec4a74cc8d8.jpg';
        $weekndSencillo2->created_at = now();
        $weekndSencillo2->updated_at = now();
        $weekndSencillo2->save();

        // ====================== > The Weeknd: Álbumes < ===========================

        // Álbum The Weeknd - 1_1 - AERO
        $weekndAlbum1 = new Song();
        $weekndAlbum1->album_id = 9;
        $weekndAlbum1->sencillo = false;
        $weekndAlbum1->name_song = "Starboy";
        $weekndAlbum1->time = '3:51';
        $weekndAlbum1->genre = 'pop';
        $weekndAlbum1->url = '48382e21-5018-4f4e-b3f2-2d35d3d08fce.mp3';
        $weekndAlbum1->image = '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg';
        $weekndAlbum1->total = 230.50;
        $weekndAlbum1->created_at = now();
        $weekndAlbum1->updated_at = now();
        $weekndAlbum1->save();

        // Álbum The Weeknd - 1_2 - AERO
        $weekndAlbum2 = new Song();
        $weekndAlbum2->album_id = 9;
        $weekndAlbum2->sencillo = false;
        $weekndAlbum2->name_song = "False alarm";
        $weekndAlbum2->time = '3:51';
        $weekndAlbum2->genre = 'pop';
        $weekndAlbum2->url = '5e170f95-b6d7-43b3-95c8-b9087b5cc132.mp3';
        $weekndAlbum2->image = '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg';
        $weekndAlbum2->total = 230.58;
        $weekndAlbum2->created_at = now();
        $weekndAlbum2->updated_at = now();
        $weekndAlbum2->save();

        // Álbum The Weeknd - 1_3 - AERO
        $weekndAlbum3 = new Song();
        $weekndAlbum3->album_id = 9;
        $weekndAlbum3->sencillo = false;
        $weekndAlbum3->name_song = "Die for you";
        $weekndAlbum3->time = '4:20';
        $weekndAlbum3->genre = 'pop';
        $weekndAlbum3->url = '9e1069cd-6445-498b-8822-d32ec8a68f27.mp3';
        $weekndAlbum3->image = '8307fc43-23a6-4e69-8b35-85fdf88ac1b2.jpg';
        $weekndAlbum3->total = 260.28;
        $weekndAlbum3->created_at = now();
        $weekndAlbum3->updated_at = now();
        $weekndAlbum3->save();
    }
}
