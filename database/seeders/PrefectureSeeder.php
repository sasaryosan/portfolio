<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrefectureSeeder extends Seeder
{
    
    public function run(): void
    {
            DB::table('prefectures')->insert([
                    'name' => '青森県',
            ]);
            
            DB::table('prefectures')->insert([
                    'name' => '秋田県',
            ]);
            
            DB::table('prefectures')->insert([
                    'name' => '岩手県',
            ]);
            
            DB::table('prefectures')->insert([
                    'name' => '山形県',
            ]);
            
            DB::table('prefectures')->insert([
                    'name' => '宮城県',
            ]);
            
            DB::table('prefectures')->insert([
                    'name' => '福島県',
            ]);
    }
}
