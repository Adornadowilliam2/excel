<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Product::create([
        'name' => 'Product 1',
        'price' => 99.99
    ]);

    \App\Models\Product::create([
        'name' => 'Product 2',
        'price' => 149.99
    ]);
}

}
