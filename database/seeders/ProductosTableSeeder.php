<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $celulares = [
            "iPhone 13 Pro",
            "Samsung Galaxy S21 Ultra",
            "Google Pixel 6 Pro",
            "Xiaomi Mi 11 Ultra",
            "OnePlus 9 Pro",
            "Huawei P50 Pro",
            "Sony Xperia 1 III",
            "Oppo Find X3 Pro",
            "Asus ROG Phone 5",
            "Vivo X60 Pro+",
            "Realme GT",
            "Motorola Edge+",
            "Lenovo Legion Phone Duel 2",
            "LG Velvet",
            "TCL 20 Pro 5G",
            "ZTE Axon 30 Ultra",
            "Nokia X20",
            "Blackberry Key2",
            "Xiaomi Redmi Note 10 Pro",
            "Google Pixel 5a",
            "Samsung Galaxy A52",
            "iPhone SE (2020)",
            "OnePlus Nord 2",
            "Huawei Nova 8 Pro",
            "Sony Xperia 5 III",
            "Asus Zenfone 8",
            "Vivo V21",
            "Realme 8 Pro",
            "Motorola Moto G Power (2021)",
            "Xiaomi Poco X3 Pro",
            "Oppo Reno 6 Pro",
            "Samsung Galaxy Z Fold 3",
            "iPhone 12 Mini",
            "Google Pixel 4a",
            "OnePlus 8T",
            "Huawei Mate 40 Pro",
            "Sony Xperia 10 III",
            "Xiaomi Redmi Note 9 Pro",
            "Vivo Y20",
            "Motorola Moto G Stylus (2021)",

        ];


        $descripcion = 'Este es un celular de última generación con características impresionantes.';


        foreach ($celulares as $nombre) {
            DB::table('productos')->insert([
                'Nombre' => $nombre,
                'Descripción' => $descripcion,
                'Precio' => rand(500, 2000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
