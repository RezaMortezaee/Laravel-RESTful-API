<?php

use App\Product;
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
        // Product::truncate();
        // factory(App\Product::class)->create()->each(
        //     function ($product) {
        //         $categories = \App\Category::all()->random(mt_rand(1, 5))->pluck('id');
        //         $product->categories()->attach($categories);
        //     }
        // );
    }
}
