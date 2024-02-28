<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Train;
//use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate(); //Svuota la tabella dalle righe prima di eseguire il seeder

        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $train = new Train();

            // Ne riempio le colonne
            $train->company = fake()->words(rand(1, 3), true);
            $train->cancelled = fake()->boolean(20);
            $train->departure_date = fake()->date();
            $train->departure_time = fake()->time();
            $train->departure_station = fake()->city();
            $train->arrival_date = fake()->date();
            $train->arrival_time = fake()->time();
            $train->arrival_station = fake()->city();
            $train->price = fake()->randomNumber(3, false);
            $train->carriages_num = rand(2, 10);
            $train->train_code = fake()->unique()->regexify('[A-Z]{2}[0-4]{5}');
            $train->on_time = fake()->boolean(20);

            // Lo salvo in persistenza
            $train->save();
        }
    }
}
