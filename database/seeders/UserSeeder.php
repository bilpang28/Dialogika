<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {
            // use faker
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'role' => 'writer',
            ]);
        }
    }
}
