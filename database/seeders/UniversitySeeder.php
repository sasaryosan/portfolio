<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UniversitySeeder extends Seeder
{

    public function run(): void
    {
        DB::table('universities')->insert([
            'name' => '弘前大学大学院',
            'prefecture_id' => 1,
            'website_url' => 'https://www.hirosaki-u.ac.jp/academic/gs/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]);
        
        DB::table('universities')->insert([
            'name' => '秋田大学大学院',
            'prefecture_id' => 2,
            'website_url' => 'https://www.akita-u.ac.jp/honbu/faculties/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]);
        
        DB::table('universities')->insert([
            'name' => '岩手大学大学院（修士課程）',
            'prefecture_id' => 3,
            'website_url' => 'https://www.iwate-u.ac.jp/academics/graduate/sci.html',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]);
        
        DB::table('universities')->insert([
            'name' => '山形大学大学院',
            'prefecture_id' => 4,
            'website_url' => 'https://www.yamagata-u.ac.jp/jp/faculty/graduate-school/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]);
        
        DB::table('universities')->insert([
            'name' => '東北大学大学院',
            'prefecture_id' => 5,
            'website_url' => 'https://www.tohoku.ac.jp/japanese/academics/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]);
        
        DB::table('universities')->insert([
            'name' => '福島大学大学院',
            'prefecture_id' => 6,
            'website_url' => 'https://www.fukushima-u.ac.jp/graduate-schools/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]);
    }
}
