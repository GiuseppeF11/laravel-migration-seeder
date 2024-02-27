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
        Train::truncate();

        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $train = new Train();
            // Ne riempio le colonne
            $train->company = fake()->words(rand(1, 3), true);
            $train->cancelled = false;
            $train->departure_time = fake()->date();
            $train->departure_station = fake()->city();
            $train->arrival_time = fake()->date();
            $train->arrival_station = fake()->city();
            $train->codice_treno = fake()->words(rand(1, 3), true);

            // Lo salvo in persistenza
            $train->save();
        }
    }
}
