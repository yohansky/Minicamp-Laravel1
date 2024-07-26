<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
// penting untuk define models
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Product::factory()->count(25)->create();

        // DB::table('products')->insert([
        //     'name' => 'Product 1',
        //     'price' => 100,
        //     'stock' => 50,
        // ]);

        // DB::table('products')->insert([
        //     'name' => 'Product 2',
        //     'price' => 150,
        //     'stock' => 30,
        // ]);

        // jika memakai factory akan otomatis terisi created at dan deleted atnya
        Product::factory()->create([
            'name' => 'Celana',
            'price' => 20000,
            'stock' => 15,
        ]);
    }
}
