<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Администратор',
            'user_id' => 1
        ]);
        Role::create([
            'name' => 'Пользователь',
            'user_id' => 2
        ]);
    }
}
