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
//        Destination::create([
//            'name' => 'Парк',
//            'description' => 'описание парка',
//            'lat' => 12.34,
//            'long' => 56.78,
//            'category_id' => 2,
//            'average_rating' => 5,
//        ]);
        Destination::create([
            'name' => 'Гора',
            'description' => 'описание горы',
            'lat' => 12.34,
            'long' => 56.78,
            'category_id' => 1,
            'average_rating' => 5,
        ]);
        Destination::create([
            'name' => 'Пляж',
            'description' => 'описание пляжа',
            'lat' => 12.34,
            'long' => 56.78,
            'category_id' => 3,
            'average_rating' => 5,
        ]);
    }
}
