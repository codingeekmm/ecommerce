<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        OrderItem::create([
            'order_id' => 1,
            'product_id' => 1, // Smartphone
            'quantity' => 1,
            'price' => 699.99,
        ]);

        OrderItem::create([
            'order_id' => 1,
            'product_id' => 2, // T-Shirt
            'quantity' => 2,
            'price' => 19.99,
        ]);
    }
}
