<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'name' => 'Es Kopi Susu',
            'price' => '15000',
            'image' => 'kopisusu.png',
            'background' => 'bgKopi.jpg',
            'stok' => '15',
            'desc'=> 'Es Kopi Susu adalah minuman yang terbuat dari espresso, susu UHT dan susu kental manis. Minuman ini biasanya disajikan dengan gelas plastik bertutup.',
        ]);
        Produk::create([
            'name' => 'Red Velvet Latte',
            'price' => '15000',
            'image' => 'RedVelvet.png',
            'background' => 'bgRedVelvet.jpg',
            'stok' => '15',
            'desc'=> 'Minuman Red Velvet adalah minuman yang terbuat dari bubuk Red Velvet yang diciptakan dari berbagai bahan, bahan-bahan tersebut ialah buttermilk, kakao, kopi, cuka, dan pewarna makanan merah. Memiliki citarasa cokelat akan tetapi memiliki tekstur yang berbeda.',
        ]);
    }
}
