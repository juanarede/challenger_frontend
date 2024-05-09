<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
   
    public function run(): void
    {
        $faker = Faker::create();


        for ($i = 0; $i < 20; $i++) {
            DB::table('clientes')->insert([
                'Nombre' => $faker->name,
                'Dirección' => $faker->address,
                'Email' => $faker->unique()->safeEmail,
                'Teléfono' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
