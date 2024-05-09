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
                'ClienteID' => $faker->numberBetween(1, 10), // Genera un ID de cliente aleatorio entre 1 y 10 (ajusta según tus necesidades)
                'FechaPedido' => $faker->dateTimeBetween('-1 year', 'now'), // Genera una fecha de pedido aleatoria en el último año
                'Total' => $faker->randomFloat(2, 10, 200), // Genera un total aleatorio entre 10 y 200 con 2 decimales
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
