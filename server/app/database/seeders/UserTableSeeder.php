<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        User::create([
//            'first_name' => 'Данил',
//            'last_name' => 'Данилов',
//            'username' => 'Даня',
//            'email' => 'danya@mail.ru',
//            'password' => '12345678',
//        ]);
        User::create([
            'first_name' => 'Иван',
            'last_name' => 'Иванов',
            'username' => 'Ваня',
            'email' => 'ivan@mail.ru',
            'password' => '12345678',
        ]);


    }
}
