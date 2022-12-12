<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Product::create([
            'modelo' => 'Scarlett 2i2 3ra',
            'precio' => 180000,
            'stock' => 35,
            'imagen' => '654654654654.jpg',
         ]);
    }
}
