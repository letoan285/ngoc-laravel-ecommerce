<?php
use Illuminate\Support\Facades\DB;
//use DB;

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// Route::get('/products/{id}/{name}', function ($productID) {
//     $products = [
//         ['id' => 1, 'name' => 'product 1'],
//         ['id' => 2, 'name' => 'product 1'],
//         ['id' => 3, 'name' => 'product 1'],
//         ['id' => 4, 'name' => 'product 1']
//     ];
//      return [$productID];
// })->where('name', '[a-z]+');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->middleware('isAdmin')->name('products.create');
Route::post('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::get('categories', function() {
    $cates = DB::table('categories')->get();
    return response()->json($cates, 200);
});
// Route::get('categories', 'CategoryController@index');

// Category Route
Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::get('categories/{id}', 'CategoryController@show')->name('categories.show');
Route::post('categories', 'CategoryController@store')->name('categories.store');

// User routes
Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/{id}', 'UserController@show')->name('users.show');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
