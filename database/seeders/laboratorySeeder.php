<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class laboratorySeeder extends Seeder
{

    public function run(): void
    {
        DB::table('laboratories')->insert([
            'university_id' => 1,
            'name' => '黒尾研究室'
            'major_id' => 6,
            'field' => '分子細胞遺伝学',
            'body' => '両生類，鳥類，哺乳類等のDNA 及び染色体レベルにおける遺伝的多様性の解析に関する研究',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('laboratories')->insert([
            'university_id' => 2,
            'name' => '河上研究室'
            'major_id' => 1,
            'field' => '逆問題　拡散方程式　形状推定',
            'body' => '「逆問題」, 特に「未知の形を推定する逆問題」を数学的に研究しています。主な方法は解析的手法（特に積分）です。逆問題は, データから未知の何かを推定する問題なので, データサイエンスとも深い関係があります（データから AI (人工知能) を作るのも, 逆問題の一種です）。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('laboratories')->insert([
            'university_id' => 3,
            'name' => '本田研究室'
            'major_id' => 1,
            'field' => '関数解析',
            'body' => 'ノルムにより完備位相が導入される無限次元空間はバナッハ空間と呼ばれ、確率論や最適化理論などにおいて重要な役割を果たしている。私は、空間上の非線形射影を用いることで、バナッハ空間の幾何学的性質を研究している。非拡大射影、距離射影は代表的な非線形射影だが、近年、一般化射影、一般化非拡大射影が発見され、バナッハ空間の直交補空間分解を用いて、条件付き期待値などの線形非拡大射影との関係の解明に挑戦している。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('laboratories')->insert([
            'university_id' => 4,
            'name' => '加来研究室'
            'major_id' => 6,
            'field' => '嫌気性微生物の生理・生態学　廃棄物からの有価資源・エネルギー回収技術の開発',
            'body' => '本研究グループでは、各種嫌気環境下に生息する微生物、特に偏性嫌気性細菌の生理、生態並びに多様性について研究を行うとともに、その有効利用を目指して研究を行っている。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('laboratories')->insert([
            'university_id' => 5,
            'name' => '文化人類学研究室'
            'major_id' => 24,
            'field' => '東アジア社会のビジネス・ネットワーク 中国の家族・親族と儀礼',
            'body' => '平成5年4月、文学部内に大学院博士課程（前・後期）を併せ持つ独立専攻として発足しました。現在の教員は「東アジア社会のビジネス・ネットワーク」を主要研究テーマとする沼崎一郎教授、ならびに「中国の家族・親族と儀礼」を主要研究テーマとする川口幸大准教授です。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('laboratories')->insert([
            'university_id' => 6,
            'name' => '藤本研究室'
            'major_id' => 1,
            'field' => '非加法的集合関数　知能情報学',
            'body' => '	Choquet汎関数を用いたシステムの階層的分解に関する研究など',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
