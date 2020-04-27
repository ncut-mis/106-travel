<?php

use Illuminate\Database\Seeder;

class guides_test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guides') -> insert([
            [
                'user_id' => rand(1,10),
                'id_card' => 'A178333348',
                'fontsize' => '20',
                'pass' => '0',
                'photo' => 'mb_pic/頭貼1.jpg',
                'created_at' => now()
            ],
            [
                'user_id' => rand(1,10),
                'id_card' => 'E246775390',
                'fontsize' => '20',
                'pass' => '0',
                'photo' => 'mb_pic/頭貼2.jpg',
                'created_at' => now()
            ],
            [
                'user_id' => rand(1,10),
                'id_card' => 'U786765890',
                'fontsize' => '20',
                'pass' => '0',
                'photo' => 'mb_pic/頭貼3.jpg',
                'created_at' => now()
            ],
            
            
            
        ]);



        DB::table('guides_audit') -> insert([
            [
                'guide_id' => 1,
                'license_intro' => '我的旅遊照片',
                'license' => 'mb_pic/證明'.rand(1,3).'.jpg',
                'video' => 'https://www.youtube.com/embed/qWAcofzfEak',
                'video_intro' => '我的影片',
                'motive' => '想賺錢'
               
            ],
            [
                'guide_id' => 2,
                'license_intro' => '我的旅遊照片',
                'license' => 'mb_pic/證明'.rand(1,3).'.jpg',
                'video' => 'https://www.youtube.com/embed/qWAcofzfEak',
                'video_intro' => '我的影片',
                'motive' => '想賺錢'
            ],
            [
                'guide_id' => 3,
                'license_intro' => '我的旅遊照片',
                'license' => 'mb_pic/證明'.rand(1,3).'.jpg',
                'video_intro' => '我的影片',
                'video' => 'https://www.youtube.com/embed/qWAcofzfEak',
                'motive' => '想賺錢'
            ],
            [
                'guide_id' => 1,
                'license_intro' => '我的證照',
                'license' => 'mb_pic/證照'.rand(1,3).'.jpg',
                'video_intro' => '',
                'video' =>'',
                'motive' => ''
               
            ],
            [
                'guide_id' => 2,
                'license_intro' => '我的證照',
                'license' => 'mb_pic/證照'.rand(1,3).'.jpg',
                'video_intro' => '',
                'video' =>'',
                'motive' => ''
            ],
            [
                'guide_id' => 3,
                'license_intro' => '我的證照',
                'license' => 'mb_pic/證照'.rand(1,3).'.jpg',
                'video_intro' => '',
                'video' =>'',
                'motive' => ''
            ],
            
           
        ]);
    }
}
