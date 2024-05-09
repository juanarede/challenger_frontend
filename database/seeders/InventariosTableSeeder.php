<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InventariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        for ($i = 1; $i <= 40; $i++) {
            DB::table('inventarios')->insert([
                'ProductoID' => $i,
                'CantidadDisponible' => $faker->numberBetween(1, 200),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
