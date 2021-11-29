<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Factory;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        public function run() {
            Product::create(20);
            Factory(App\Model\Product::class, 20)->create();
        }
        // php artisna db::seed --class=ProductTableSeeder
    }
}
