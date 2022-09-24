<?php

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0 ; $i < 13 ; $i++){

            $new_train= new Train();

            $new_train->company= $faker->randomElement(['ferrovie_del_sud', 'trenord', 'italo', 'trenitalia']);
            $new_train->departing_station= $faker->city();
            $new_train->arriving_station= $faker->city() ;
            $new_train->departing_time= $faker->time();
            $new_train->arriving_time= $faker->time();
            $new_train->train_code= $faker->ean8();
            $new_train->carriges= $faker->randomNumber(2, false);
            $new_train->is_on_time= $faker->boolean();
            $new_train->is_cancelled= $faker->boolean();

            $new_train->save();
        }

    }
}
