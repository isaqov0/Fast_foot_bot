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
	        'price' => 20000,
			'description' => 'Mazali va yarim tayor ovqatlar',
			'number' => 2,
			'category_id' => 1,
	        'image' => 'https://www.restoran-shafran.uz/image/cache/catalog/product/lavash-v-tandire-i-s-sirom-1-750x500.jpg',
        ]);
	    Fast_food::create([
		    'name' => 'Nonburger',
		    'price' => 15000,
		    'description' => 'Mazali va yarim tayor ovqatlar',
			'number' => 4,
		    'category_id' => 1,
		    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5yKVtb3sf44vO0fzWGgxAa8_Nuih0rt-B_Q&usqp=CAU',
	    ]);
	    Fast_food::create([
		    'name' => 'Hoddog',
		    'price' => 10000,
		    'description' => 'Mazali va yarim tayor ovqatlar',
			'number' => 3,
		    'category_id' => 1,
		    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgOGjJJa4a8u4haf2ZY2lSAY8T5OCbdLTPUQ&usqp=CAU',
	    ]);
	    Fast_food::create([
		    'name' => 'Coca cola',
		    'price' => 10000,
		    'description' => 'Salqin ichimlikkar',
			'number' => 2,
		    'category_id' => 2,
		    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo1Yj5lzU6eBm-jq2RTyq1583AVZ1HM8_ReA&usqp=CAU',
	    ]);
	    Fast_food::create([
		    'name' => 'Pahlava',
		    'price' => 10000,
		    'description' => 'Mazali shrinliklar',
		    'number' => 5,
		    'category_id' => 3,
		    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8ce9eg_vNAsReD9MwrR-LMTNEPGUDjem97Q&usqp=CAU',
	    ]);
    }
}
