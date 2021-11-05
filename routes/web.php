<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route that sends back a view

// Route::get('/', function () {
//     return env('home');
// });

// laravel 8 (new)
// Route::get('/home', [ProductController::class, 'index'])->name('home');


//laravel 8 (also new)
//Route::get('/Product','App/Http/Controllers/ProductController@index');

// Route::get('/Product',[ProductController::class, 'index'])->name('products');


//Route::get('/',[PageController::class, 'index']);

Route::get('/', [PostController::class, 'index']);

Route::get('/f',[PageController::class,'index']);


//Route::get('/about',[PagesController::class, 'about']);

 // /product = all product
 // /product/productName
 // /product/productId


 //pattern is integer
 //Route::get('/product/{id}',
 //[ProductController::class, 'show'])->where('id','[0-9]+');


 //pattern is a string
 //Route::get('/product/{name}',
 //[ProductController::class, 'show'])->where('name','[a-zA-Z]+');

// Route::get('/product/{name}/{id}',
 //[ProductController::class, 'show'])->where([
    // 'name' =>'[a-z]+',
   //  'id' => '[0-9]+'
// ]);
 
 //Route::get('/product/{Name}',[ProductController::class, 'show']);


// Route::get('/', [PostController::class, 'index']);

// Route::get('/product/about', [ProductController::class, 'about']);

//Route to users - string
// Route::get('/users', function (){
//     return 'welcome to  the users page';
// });

//Route to users - Array(JSON)
// Route::get('/users', function () {
//     return ['PHP','HTML','Laravel'];
// });

//Route to users  -JSON Object
// Route::get('/users',function (){
//     return response()->json([
//         'name' => 'precious',
//         'course' => 'laravel beginners to advanced'
//     ]);
// });


//ROUTE to users
// Route::get('/users', function () {

//     return redirect('/');
// });

//firstproject.com == /
//firstproject.com ==/users 