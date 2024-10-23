<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone with all features.',
            'price' => 699.99,
            'stock' => 50,
            'category_id' => 1, // Electronics
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'description' => 'Comfortable cotton t-shirt.',
            'price' => 19.99,
            'stock' => 100,
            'category_id' => 2, // Clothing
        ]);

        Product::create([
            'name' => 'Blender',
            'description' => 'High-speed blender for smoothies.',
            'price' => 49.99,
            'stock' => 30,
            'category_id' => 3, // Home & Kitchen
        ]);

        Product::create([
            'name' => 'Mystery Novel',
            'description' => 'An engaging mystery novel.',
            'price' => 9.99,
            'stock' => 200,
            'category_id' => 4, // Books
        ]);

        Product::create([
            'name' => 'Soccer Ball',
            'description' => 'Official size soccer ball.',
            'price' => 29.99,
            'stock' => 75,
            'category_id' => 5, // Sports
        ]);
    }
}
