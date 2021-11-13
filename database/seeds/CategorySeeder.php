<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=> "Star",
                'description'=>'Star Shape',
            ],
            [
                'category'=> "Botse",
                'description'=>'Sweetened mung beans',
            ],
            [
                'category'=> "Bahog bahog",
                'description'=>'Pan de pula',
            ],
            [
                'category'=> "Frances",
                'description'=>'Naturally Leavened Bread',
            ],
            [
                'category'=> "Pandesal",
                'description'=>'Common Bread Roll ',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
