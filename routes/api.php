<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 'checkPassword'
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function() {

    // Categories
    Route::get('categories', 'CategoriesController@index');
    Route::get('category/{id}', 'CategoriesController@getCategoryById');
    Route::post('category', 'CategoriesController@store');

    // Products
    Route::get('products', 'ProductController@index');

    // Sliders
    Route::get('sliders', 'SliderController@index');

    Route::group(['prefix' => 'admin','namespace' => 'Admin'],function (){
        Route::post('login', 'AuthController@login');
        Route::post('logout','AuthController@logout')->middleware(['auth.guard:admin-api']);
    });

    Route::group(['prefix' => 'user','namespace'=>'User'],function (){
        Route::post('login','AuthController@Login') ;
        Route::post('register','AuthController@register') ;
    });


    Route::group(['prefix' => 'user' ,'middleware' => 'auth.guard:user-api'],function (){
        Route::post('profile', function(){
            return 'Only authenticated user can reach me';
        });
    });

});

                                                                      // admin-api => guard Name
// Route::group(['middleware' => ['api','checkPassword','checkAdminToken:admin-api'], 'namespace' => 'Api'], function () {
//     Route::get('categories', 'CategoriesController@index');
// });
