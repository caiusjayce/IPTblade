<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=> "Sweet",
                'description'=>'Sweet Yeast Dough',
            ],
            [
                'unit_type'=> "Wheat",
                'description'=>'Wholemeal bread',
            ],
            [
                'unit_type'=> "Shape & Size",
                'description'=>'Variety of rolls and buns',
            ],
            [
                'unit_type'=> "Texture",
                'description'=>'Dense / Coarse',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}