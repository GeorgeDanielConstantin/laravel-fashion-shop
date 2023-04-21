<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shoe;
use Faker\Generator as Faker;




class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 100; $i++){

            $shoe = new Shoe;
    
            $shoe->marca= $faker ->randomElement (['Adidas','Nike','Jordan', 'Skechers']);
            $shoe->modello= $faker ->word();
            $shoe->image= $faker ->imageUrl(640, 480, true);
            $shoe->colore= $faker ->colorName();
            $shoe->taglia= $faker ->randomFloat(1, 34, 48);
            $shoe->prezzo= $faker ->randomFloat(2, 20, 500);
    
    
            $shoe->save();
            }   
    }
}
