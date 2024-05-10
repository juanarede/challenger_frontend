<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DetallePedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        for ($i = 1; $i <= 40; $i++) {
            DB::table('detalle_pedidos')->insert([
                'PedidoID' => $i,
                'ProductoID' => $faker->numberBetween(1, 40),
                'Cantidad' => $faker->numberBetween(1, 10),
                'PrecioUnitario' => $faker->randomFloat(2, 10, 100), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
