<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MajorSeeder extends Seeder
{

    public function run(): void
    {
            DB::table('majors')->insert([
                    'name' => '数学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '物理学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '天文学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '地球科学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '化学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '生物学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '計算機科学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '工学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '建築学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => 'デザイン学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '農学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '医学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '薬学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '政治学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '法学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '経済学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '経営学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '社会学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '教育学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '心理学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '哲学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '宗教学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '言語学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '人類学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '歴史学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '地理学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '文学',
            ]);
            
            DB::table('majors')->insert([
                    'name' => '芸術学',
            ]);
    }
}
