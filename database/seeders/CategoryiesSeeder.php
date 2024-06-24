<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
			'name'=> 'Fast food',
        ]);
	    Categories::create([
		    'name'=> 'Drinks',
	    ]);
	    Categories::create([
		    'name'=> 'Sweets',
	    ]);
    }
}
