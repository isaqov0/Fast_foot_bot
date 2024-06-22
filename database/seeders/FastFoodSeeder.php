<?php

namespace Database\Seeders;

use App\Models\Fast_food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FastFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fast_food::create([
			'name' => 'Lavash',
	        'price' => 5,
	        'image' => 'lavash.jpg',
        ]);
    }
}
