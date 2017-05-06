<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('user-manager');
});

Route::post('addNew', [
    'uses' => 'ProductController@postNewProduct',
    'as'=> 'add-new-product'
]);
