<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'Шерегеш',
            'description' => 'Гора в кемеровской области',
            'lat' => 12.34,
            'long' => 56.78,
            'category_id' => 1,
            'average_rating' => 5,
        ]);
    }
}
