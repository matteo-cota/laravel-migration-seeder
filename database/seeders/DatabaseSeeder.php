<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(PassengerSeeder::class);
        $this->call(TrainSeeder::class);
    }
}