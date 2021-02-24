<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'=>"นายจิรายุ สิทธิศร",
                    "email"=>"jarayu.sit.61@ubu.ac.th",
                    "password"=>"JATTS",
                ],
                [
                    'name'=>"นายตรีเทพ เฉลียวธรรม",
                    "email"=>"trithep.ch.62@ubu.ac.th",
                    "password"=>"JATTS",
                ],
                [
                    'name'=>"นายสุระเกรียติ ทับละคร",
                    "email"=>"mr.surakiat.ta.62@ubu.ac.th",
                    "password"=>"JATTS",
                ],
                [
                    'name'=>"นายวรนาถ บุญเอนก",
                    "email"=>"woranan.bu.62@ubu.ac.th",
                    "password"=>"JATTS",
                ],
                [
                    'name'=>"นายอรรถพล สรรพทรัย์",
                    "email"=>"atthapon.sa.61@ubu.ac.th",
                    "password"=>"JATTS",
                ],
            ]);
    }
}
