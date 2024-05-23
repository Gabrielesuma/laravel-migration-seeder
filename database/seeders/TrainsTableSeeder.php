<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->dateTime();
            $new_train->arrival_time = $faker->dateTime();
            $new_train->code = $faker->postcode();
            $new_train->carriage = $faker->numberBetween(1,20);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();
            $new_train->save();
        }
    }
}
