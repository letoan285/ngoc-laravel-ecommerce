<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-user', function () {
    factory(\App\User::class)->create();
});

Route::get('create-profile', function () {
    //factory(\App\User::class)->create();
    $profile = [
        'user_id' => 1,
        'avatar' => 'noavatar.png',
        'phone' => '0909000999'
    ];
    DB::table('profiles')->insert($profile);
});
