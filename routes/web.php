<?php
	
	
	use App\Http\Controllers\FastFoodController;
	use App\Models\Categories;
	use App\Models\Fast_food;
	use Illuminate\Support\Facades\Route;
	
	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider and all of them will
	| be assigned to the "web" middleware group. Make something great!
	|
	*/
	
	Route ::get('/', [FastFoodController::class, 'index']);
	
	Route ::get('menu', function() {
		$foods = Fast_food::all();
		$categories = Categories::all();
		return view('menu',compact('foods' , 'categories'));
	});
	
	Route ::get('about', function() {
		return view('about');
	});
	Route::get('book',function(){
		return view('book');
	});
