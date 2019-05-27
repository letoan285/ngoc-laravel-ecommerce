<?php
use Illuminate\Support\Facades\DB;
//use DB;

Route::get('/', function () {
    $products = [
        ['id' => 1, 'name' => 'product 1'],
        ['id' => 2, 'name' => 'product 1'],
        ['id' => 3, 'name' => 'product 1'],
        ['id' => 4, 'name' => 'product 1']
    ];
     return $products;
});
// Route::get('/products/{id}/{name}', function ($productID) {
//     $products = [
//         ['id' => 1, 'name' => 'product 1'],
//         ['id' => 2, 'name' => 'product 1'],
//         ['id' => 3, 'name' => 'product 1'],
//         ['id' => 4, 'name' => 'product 1']
//     ];
//      return [$productID];
// })->where('name', '[a-z]+');
Route::get('products', 'ProductController@index');
Route::get('categories', function() {
    $cates = DB::table('categories')->get();
    return response()->json($cates, 200);
});
// Route::get('categories', 'CategoryController@index');