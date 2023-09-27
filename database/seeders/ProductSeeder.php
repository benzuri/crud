<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert products into the products table
        $names = ['one', 'two', 'three', 'four', 'five'];
        foreach ($names as $name) {
            DB::table('products')->insert([
                'name' => \Str::ucfirst($name),
                'description' => 'Description for product ' . $name,
                'image' => 'https://dummyimage.com/300x300&text=' . $name,
            ]);
        }
    }
}
