<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++)
        
        Product::create([
            "code" => "123",
            "name" => "sabun $i",
            "description" => "mencerahkan",
            "qty" => 1 + $i,
            "price" => 3000 + $i
        ]);
    
        Product::create([
        "code" => rand(1, 10),
        "name" => Str::random(20),
        "description" => Str::random(25),
        "qty" => rand(10, 50),
        "price" => rand(2000, 5000)
        ]);
    }
}
