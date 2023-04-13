<?php

use App\Models\Product;
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
/*
Route::get('/', function () {
    return view('movies',[
        'movies'=> [
		[
			'id' => 1,
			'title' => 'Iron Man',
			'releasedate' => '2008',
			'genre' => 'Action'
		],
		[
			'id' => 2,
			'title' => 'Spider Man',
			'releasedate' => '2012',
			'genre' => 'Sci-Fi'
		],
		[
			'id' => 3,
			'title' => 'Barbie',
			'releasedate' => '2000',
			'genre' => 'Cartoon'
		]
        ]
	]);
});
*/
/*
Route::get('/', function () {
    return view('products',[
        'products'=> [
		[
			'id' => 1,
			'productname' => 'Kuliglig',
			'unitprice' => '24,000',
			'quantity' => 1
		],
		[
			'id' => 2,
			'productname' => 'Lupar Mixer',
			'unitprice' => 31000,
			'quantity' => 2
		],
		[
			'id' => 3,
			'productname' => 'Electric Pump',
			'unitprice' => 3000,
			'quantity' => 3
        ],
        [
			'id' => 4,
			'productname' => 'Tiller Machine',
			'unitprice' => 37500,
			'quantity' => 4
		],
        [
			'id' => 5,
			'productname' => 'Power Sprayer',
			'unitprice' => 6500,
			'quantity' => 5
		]
        ]
	]);
});
*/

Route::get('/', function () {
	return view('products', [
		'heading' => 'Product Catalog',
		'products' => Product::all()
	]);
});

Route::get('/product/{product}', function(Product $product){ //model-route binding
	return view('product',[
		'product' => $product
	]);
});

//Route::get('/products', function(){
//	return "This is the product page";
//});