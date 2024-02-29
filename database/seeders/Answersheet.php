<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Answersheet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answerData = [
            ['page_number' => '1','box_1' => '1','box_2' => '40','box_3' => '41','box_4' => '11','box_5' => '12','box_6' => '3'],
            ['page_number' => '2','box_1' => '2','box_2' => '38','box_3' => '40','box_4' => '40','box_5' => '6','box_6' => '4'],
            ['page_number' => '3','box_1' => '3','box_2' => '36','box_3' => '39','box_4' => '7','box_5' => '8','box_6' => '5'],
            ['page_number' => '4','box_1' => '1','box_2' => '34','box_3' => '35','box_4' => '10','box_5' => '11','box_6' => '6'],
            ['page_number' => '5','box_1' => '2','box_2' => '32','box_3' => '34','box_4' => '8','box_5' => '9','box_6' => '7'],
            ['page_number' => '6','box_1' => '3','box_2' => '30','box_3' => '33','box_4' => '13','box_5' => '14','box_6' => '8'],
            ['page_number' => '7','box_1' => '1','box_2' => '28','box_3' => '29','box_4' => '9','box_5' => '10','box_6' => '9'],
            ['page_number' => '8','box_1' => '2','box_2' => '26','box_3' => '28','box_4' => '5','box_5' => '6','box_6' => '10'],
            ['page_number' => '9','box_1' => '3','box_2' => '24','box_3' => '27','box_4' => '8','box_5' => '9','box_6' => '11'],
            ['page_number' => '10','box_1' => '1','box_2' => '22','box_3' => '23','box_4' => '8','box_5' => '9','box_6' => '12'],
            ['page_number' => '11','box_1' => '2','box_2' => '20','box_3' => '22','box_4' => '9','box_5' => '10','box_6' => '13'],
            ['page_number' => '12','box_1' => '3','box_2' => '18','box_3' => '21','box_4' => '15','box_5' => '16','box_6' => '14'],
            ['page_number' => '13','box_1' => '1','box_2' => '16','box_3' => '17','box_4' => '3','box_5' => '4','box_6' => '15'],
            ['page_number' => '14','box_1' => '2','box_2' => '14','box_3' => '16','box_4' => '7','box_5' => '8','box_6' => '16'],
            ['page_number' => '15','box_1' => '3','box_2' => '12','box_3' => '15','box_4' => '1','box_5' => '2','box_6' => '17'],
            ['page_number' => '16','box_1' => '1','box_2' => '10','box_3' => '11','box_4' => '4','box_5' => '5','box_6' => '18'],
            ['page_number' => '17','box_1' => '2','box_2' => '8','box_3' => '10','box_4' => '2','box_5' => '3','box_6' => '19'],
            ['page_number' => '18','box_1' => '3','box_2' => '6','box_3' => '9','box_4' => '6','box_5' => '7','box_6' => '20'],
            ['page_number' => '19','box_1' => '1','box_2' => '4','box_3' => '5','box_4' => '6','box_5' => '7','box_6' => '21'],
            ['page_number' => '20','box_1' => '2','box_2' => '2','box_3' => '4','box_4' => '4','box_5' => '5','box_6' => '22'],
        ];

        $data = DB::table('answersheet')->insert($answerData);
    }
}
