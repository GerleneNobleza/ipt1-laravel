<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'productname' => 'Kuliglig',
            'unitprice' => 24000.45,
            'quantity' => 1,
            'category' => 'Farm Equipments'
        ]);
        Product::create([
            'productname' => 'Lupar Mixer',
            'unitprice' => 31000.78,
            'quantity' => 2,
            'category' => 'Farm Equipments'
        ]);
        Product::create([
            'productname' => 'Electric Pump',
            'unitprice' => 3000.60,
            'quantity' => 3,
            'category' => 'Farm Equipments'
        ]);
    }
}
