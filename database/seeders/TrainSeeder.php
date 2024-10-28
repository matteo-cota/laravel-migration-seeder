<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;


class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeBetween('now', '+1 week'),
                'orario_arrivo' => $faker->dateTimeBetween('+1 hour', '+1 week'),
                'codice_treno' => $faker->numerify('TR#####'),
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
