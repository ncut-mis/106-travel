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
                'id' => 99,
                'user_id' => 99,
                'id_card' => 'A178333348',
                'pass' => '1',
                'photo' => 'mb_pic/頭貼01.jpg',
                'pass_time' => '2020/04/15 00:00:00',
                'created_at' => now()
            ],
            [
                'id' => 100,
                'user_id' => 100,
                'id_card' => 'E246775390',
                'pass' => '1',
                'photo' => 'mb_pic/頭貼02.jpg',
                'pass_time' => '2020/04/15 00:00:00',
                'created_at' => now()
            ],
            [
                'id' => 101,
                'user_id' => 101,
                'id_card' => 'U786765890',
                'pass' => '1',
                'photo' => 'mb_pic/頭貼03.jpg',
                'pass_time' => '2020/04/15 00:00:00',
                'created_at' => now()
            ],
            [
                'id' => 102,
                'user_id' => 102,
                'id_card' => 'U786765890',
                'pass' => '1',
                'photo' => 'mb_pic/頭貼04.jpg',
                'pass_time' => '2020/06/15 00:00:00',
                'created_at' => now()
            ],
            [
                'id' => 103,
                'user_id' => 103,
                'id_card' => 'U786765890',
                'pass' => '1',
                'photo' => 'mb_pic/頭貼05.jpg',
                'pass_time' => now(),
                'created_at' => now()
            ],
            
            
            
        ]);

        DB::table('users') -> insert([
            [
                'id' => 99,
                'name' => 'tony',
                'sex' => '男',
                'email' => 'A12345678@gmail.com',
                'type' => '導遊',
                'phone' => '0988456321',
                'password' => '87654321',
                'birthday' => '1996-09-09 00:00:00',
                'created_at' => '2020/04/15 00:00:00',
            ],
            [
                'id' => 100,
                'name' => 'Alsa',
                'sex' => '女',
                'email' => 'B12345678@gmail.com ',
                'type' => '導遊',
                'phone' => '0955426621',
                'password' => '87654321',
                'birthday' => '1997-04-11 00:00:00',
                'created_at' => '2020/04/15 00:00:00',
            ],
            [
                'id' => 101,
                'name' => 'Denny',
                'sex' => '男',
                'email' => 'C12345678@gmail.com',
                'type' => '導遊',
                'phone' => '0926456995',
                'password' => '87654321',
                'birthday' => '1982-02-18 00:00:00',
                'created_at' => '2020/04/15 00:00:00',
            ],
            [
                'id' => 102,
                'name' => 'jake',
                'sex' => '男',
                'email' => 'D12345678@gmail.com',
                'type' => '導遊',
                'phone' => '0977456995',
                'password' => '87654321',
                'birthday' => '1989-05-18 00:00:00',
                'created_at' => '2020/05/15 00:00:00',
            ],
            [
                'id' => 103,
                'name' => 'Ella',
                'sex' => '女',
                'email' => 'E12345678@gmail.com',
                'type' => '導遊',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => '2020/05/15 00:00:00',
            ],
            [
                'id' => 104,
                'name' => '453453',
                'sex' => '女',
                'email' => 'Z12345678@gmail.com',
                'type' => '會員',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => '2020/05/15 00:00:00',
            ],
            [
                'id' => 105,
                'name' => '453453',
                'sex' => '女',
                'email' => 'X12345678@gmail.com',
                'type' => '會員',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => '2020/05/15 00:00:00',
            ],
            [
                'id' => 106,
                'name' => '453453',
                'sex' => '女',
                'email' => 'Y12345678@gmail.com',
                'type' => '會員',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => '2020/05/15 00:00:00',
            ],
            [
                'id' => 107,
                'name' => '453453',
                'sex' => '女',
                'email' => 'ZZ12345678@gmail.com',
                'type' => '會員',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => '2020/06/03 00:00:00',
            ],
            [
                'id' => 108,
                'name' => '453453',
                'sex' => '女',
                'email' => 'XX12345678@gmail.com',
                'type' => '會員',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => '2020/06/03 00:00:00',
            ],
            [
                'id' => 109,
                'name' => '453453',
                'sex' => '女',
                'email' => 'YY12345678@gmail.com',
                'type' => '會員',
                'phone' => '0921156995',
                'password' => '87654321',
                'birthday' => '1993-10-22 00:00:00',
                'created_at' => now(),
            ],
            
            
        ]);



        


        DB::table('travels') -> insert([
            [
                'id' => 99,
                'start' => '2020/06/07',
                'end' => '2020/06/21',
                'name' => 'test',
                'total' => 15263,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/06/07',
            ],
            [
                'id' => 100,
                'start' => '2020/06/07',
                'end' => '2020/06/21',
                'name' => 'test',
                'total' => 2513,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/06/07',
            ],
            [
                'id' => 101,
                'start' => '2020/06/07',
                'end' => '2020/06/21',
                'name' => 'test',
                'total' => 7000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/06/07',
            ],
            [
                'id' => 102,
                'start' => '2020/06/07',
                'end' => '2020/06/21',
                'name' => 'test',
                'total' => 9000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>now(),
            ],
            [
                'id' => 103,
                'start' => '2020/06/07',
                'end' => '2020/06/21',
                'name' => 'test',
                'total' => 4000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>now(),
            ],
            
            [
                'id' => 104,
                'start' => '2020/02/11',
                'end' => '2020/02/13',
                'name' => 'test',
                'total' => 200,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/02/11',
            ],

            [
                'id' => 105,
                'start' => '2020/02/18',
                'end' => '2020/02/27',
                'name' => 'test',
                'total' => 2000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/02/15',
            ],
           
            [
                'id' => 106,
                'start' => '2020/02/15',
                'end' => '2020/02/23',
                'name' => 'test',
                'total' => 36200,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/02/16',
            ],

            [
                'id' => 107,
                'start' => '2020/05/20',
                'end' => '2020/05/23',
                'name' => 'test',
                'total' => 5000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/05/20',
            ],

            [
                'id' => 108,
                'start' => '2020/05/15',
                'end' => '2020/05/21',
                'name' => 'test',
                'total' => 7800,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/05/15',
            ],

            [
                'id' => 109,
                'start' => '2020/05/15',
                'end' => '2020/05/17',
                'name' => 'test',
                'total' => 3000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/05/15',
            ],

            [
                'id' => 110,
                'start' => '2020/05/26',
                'end' => '2020/05/26',
                'name' => 'test',
                'total' => 800,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2020/05/26',
            ],

            [
                'id' => 111,
                'start' => '2019/05/27',
                'end' => '2019/05/27',
                'name' => 'test',
                'total' => 9000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2019/05/27',
            ],

            [
                'id' => 112,
                'start' => '2019/04/26',
                'end' => '2019/04/26',
                'name' => 'test',
                'total' => 6000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2019/04/26',
            ],
            [
                'id' => 113,
                'start' => '2019/03/26',
                'end' => '2019/03/26',
                'name' => 'test',
                'total' => 16000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2019/03/26',
            ],

            [
                'id' => 114,
                'start' => '2018/05/27',
                'end' => '2018/05/27',
                'name' => 'test',
                'total' => 20000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2018/05/27',
            ],

            [
                'id' => 115,
                'start' => '2018/04/26',
                'end' => '2018/04/26',
                'name' => 'test',
                'total' => 30000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2018/04/26',
            ],
            [
                'id' => 116,
                'start' => '2018/03/26',
                'end' => '2018/03/26',
                'name' => 'test',
                'total' => 5000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2018/03/26',
            ],
            [
                'id' => 117,
                'start' => '2020/06/01',
                'end' => '2020/06/30',
                'name' => 'test',
                'total' => 30000,
                'pay' => 1,
                'member_id' => 107,
                'paytime' =>'2018/06/01',
            ],


            ]);


            DB::table('schedules') -> insert([
            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' => date('y/m/d', strtotime('+1 day')),
                'region' => '台北',
                'name' => '台北二日遊',
                'going' => '九如公園',
                'traffic' => '導遊開車',
                'arriving' => '淡水漁人碼頭',
                'cost' =>1500,
                'guide_id' =>99,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' =>date('y/m/d', strtotime('+2 day')),
                'region' => '台北',
                'name' => '陽明山之旅',
                'going' => '文化大學',
                'traffic' => '導遊開車',
                'arriving' => '陽明山國家公園',
                'cost' =>1500,
                'guide_id' =>100,
            ],

            
            [
                'travel_id' => 107,
                'start' => date('y/m/d', strtotime('+1 day')),
                'end' =>date('y/m/d', strtotime('+3 day')),
                'region' => '台南',
                'name' => '九份&淡水&平溪&烏來三日遊',
                'going' => '黃金瀑布',
                'traffic' => '導遊開車',
                'arriving' => '烏來溫泉',
                'cost' =>3000,
                'guide_id' =>102,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' =>date('y/m/d'),
                'region' => '台北',
                'name' => '北投溫泉一日遊',
                'going' => '北投市場',
                'traffic' => '導遊開車',
                'arriving' => '北投溫泉飯店泡湯',
                'cost' =>1000,
                'guide_id' =>101,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' =>date('y/m/d'),
                'region' => '台中',
                'name' => '東海、逢甲一日遊',
                'going' => '勤益科大',
                'traffic' => '導遊開車',
                'arriving' => '逢甲',
                'cost' =>1000,
                'guide_id' =>103,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' => date('y/m/d', strtotime('+1 day')),
                'region' => '台中',
                'name' => '台中二日遊',
                'going' => '新社花海',
                'traffic' => '導遊開車',
                'arriving' => '高美濕地',
                'cost' =>2000,
                'guide_id' =>99,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' =>date('y/m/d', strtotime('+2 day')),
                'region' => '台中',
                'name' => '台中三日遊',
                'going' => '后里車站',
                'traffic' => '導遊開車',
                'arriving' => '霧峰車站',
                'cost' =>3000,
                'guide_id' =>100,
            ],

            
            [
                'travel_id' => 107,
                'start' => date('y/m/d', strtotime('+1 day')),
                'end' =>date('y/m/d', strtotime('+3 day')),
                'region' => '台北',
                'name' => '台南三日遊',
                'going' => '台南車站',
                'traffic' => '導遊開車',
                'arriving' => '關子嶺溫泉',
                'cost' =>3000,
                'guide_id' =>102,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' =>date('y/m/d'),
                'region' => '花蓮',
                'name' => '花蓮一日遊',
                'going' => '吉安國小',
                'traffic' => '導遊開車',
                'arriving' => '太魯閣國家公園',
                'cost' =>1000,
                'guide_id' =>101,
            ],

            [
                'travel_id' => 107,
                'start' => date('y/m/d'),
                'end' =>date('y/m/d'),
                'region' => '高雄',
                'name' => '高雄一日遊',
                'going' => '大東濕地',
                'traffic' => '導遊開車',
                'arriving' => '六合夜市',
                'cost' =>1000,
                'guide_id' =>103,
            ],
          

            ]);
    }
}
