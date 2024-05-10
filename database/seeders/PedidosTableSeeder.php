<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 40; $i++) {
            DB::table('pedidos')->insert([
                'ClienteID' => $faker->numberBetween(1, 10),
                'FechaPedido' => $faker->dateTimeBetween('-1 year', 'now'),
                'Total' => $faker->randomFloat(2, 10, 200), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
