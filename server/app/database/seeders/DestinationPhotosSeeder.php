<?php

namespace Database\Seeders;

use App\Models\DestinationPhoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DestinationPhoto::create([
            'image_url' => 'capcha1',
            'destination_id' => 1
        ]);
        DestinationPhoto::create([
            'image_url' => 'capcha2',
            'destination_id' => 2
        ]);
        DestinationPhoto::create([
            'image_url' => 'capcha1',
            'destination_id' => 3
        ]);
    }
}
