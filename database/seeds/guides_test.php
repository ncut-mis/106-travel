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
                'name' => 'nike',
                'pass' => '0',
                'photo' => 'mb_pic/頭貼1.jpg',
                'created_at' => now()
            ],
            [
                'user_id' => rand(1,10),
                'id_card' => 'E246775390',
                'name' => 'danny',
                'pass' => '0',
                'photo' => 'mb_pic/頭貼2.jpg',
                'created_at' => now()
            ],
            [
                'user_id' => rand(1,10),
                'id_card' => 'U786765890',
                'name' => 'jake',
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

        DB::table('schedules') -> insert([
            [
                'region' => '700台南市中西區民族路二段212號',
                'start' => '2020/06/10',
                'end' => '2020/06/11',
                'content' => '拍照打卡',
                'name' => '赤崁樓一日遊',
                'room' => '710台南市永康區中正北路159號',
                'traffic' => '導遊開車',
                'cost' => 1200,
                'guide_id' => 1,
                'travel_id' => 1,
                'created_at' => now(),
            ],
            [
                'region' => '台北市',
                'start' => '2020/05/10',
                'end' => '2020/05/11',
                'content' => '逛101',
                'name' => '台北101一日遊',
                'room' => '寒舍艾麗酒店',
                'traffic' => '搭火車',
                'cost' => 1300,
                'guide_id' => 2,
                'travel_id' => 2,
                'created_at' => now(),
            ],
            [
                'region' => '高雄市',
                'start' => '2020/07/10',
                'end' => '2020/07/11',
                'content' => '參觀85大樓，逛愛河',
                'name' => '高雄一日遊',
                'room' => '德立莊博愛館',
                'traffic' => '導遊開車',
                'cost' => 1400,
                'guide_id' => 3,
                'travel_id' => 3,
                'created_at' => now(),
            ],
            
            
            
        ]);
    }
}
