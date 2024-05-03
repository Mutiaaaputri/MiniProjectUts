<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'kodebarang' => '0256',
                'namabarang' => 'Americano',
                'hargabarang'=> '25000',
                'description' => 'Americano kopi hitam'
            ],
            [
                'kodebarang' => '0026',
                'namabarang' => 'Latte',
                'hargabarang'=> '35000',
                'description' => 'Latte kopi susu'
            ],
            [
                'kodebarang' => '00309',
                'namabarang' => 'Hazelnut Latte',
                'hargabarang'=> '30000',
                'description' => 'Kopi Susu dengan toping Hazelnut'
            ],
        ]);
    }
}
