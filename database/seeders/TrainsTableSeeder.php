<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $train= new Train();
            $train->agency= $faker->word();
            $train->departure_station= $faker->city();
            $train->arrival_station= $faker->city();
            $train->departure_date= $faker->dateTimeThisYear();
            $train->arrival_date= $faker->dateTimeThisYear();
            $train->code_train= $faker->randomNumber(8, true);
            $train->carriage_number= $faker->randomDigit();
            $train->train_on_schedule= $faker->boolean();
            $train->train_cancelled= $faker->boolean();

            // $train->save();
    }
    }
}
