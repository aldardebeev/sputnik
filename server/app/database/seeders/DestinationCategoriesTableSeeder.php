<?php

namespace Database\Seeders;

use App\Models\DestinationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DestinationCategory::create([
            'name' => 'Горы',
        ]);
        DestinationCategory::create([
            'name' => 'Парки',
        ]);
        DestinationCategory::create([
            'name' => 'Пляжи',
        ]);

    }
}
