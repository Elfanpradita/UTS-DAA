<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['product_name' => 'Teh Pucuk', 'jumlah' => 1, 'harga' => 3000],
            ['product_name' => 'Indomie Goreng', 'jumlah' => 2, 'harga' => 4000],
            ['product_name' => 'Coca Cola', 'jumlah' => 1, 'harga' => 6000],
            ['product_name' => 'Mie Sedaap', 'jumlah' => 3, 'harga' => 3500],
            ['product_name' => 'Susu Ultra', 'jumlah' => 2, 'harga' => 12000],
            ['product_name' => 'Lays Original', 'jumlah' => 1, 'harga' => 5000],
            ['product_name' => 'Aqua', 'jumlah' => 6, 'harga' => 1500],
            ['product_name' => 'Kecap Bango', 'jumlah' => 1, 'harga' => 8000],
            ['product_name' => 'Teh Botol Sosro', 'jumlah' => 2, 'harga' => 5000],
            ['product_name' => 'Ciki Noodle', 'jumlah' => 5, 'harga' => 1000]
        ];

        foreach ($data as $datas) {
            Barang::firstOrCreate($datas);
        }
    }

}