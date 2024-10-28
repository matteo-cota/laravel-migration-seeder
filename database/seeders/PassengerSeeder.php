<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Passenger::factory()->count(50)->create();
    }
}