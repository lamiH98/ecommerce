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
    Route::resource('categories', 'CategoriesController');
    Route::get('getChildCategory/{id}', 'CategoriesController@getChildCategory');

    // Products
    Route::resource('products', 'ProductController');

    // Sliders
    Route::resource('sliders', 'SliderController');

    // Brands
    Route::resource('brands', 'BrandController');

    // Colors
    Route::resource('colors', 'ColorController');

    // Sizes
    Route::resource('sizes', 'SizeController');

    // Coupons
    Route::resource('coupons', 'CouponController');

    // Addresses
    Route::resource('address', 'AddressController');
    
    // Checkout
//     Route::resource('checkout', 'CheckoutController');
    Route::post('checkout','CheckoutController@store');

    // Orders
    Route::resource('orders', 'OrderController');
    Route::put('getOrderStatus/{id}', 'OrderController@changeOrderStatus');
    Route::get('getOrderProducts/{id}', 'OrderController@getOrderProducts');
    Route::get('userOrders/{id}', 'OrderController@userOrders');

    Route::group(['prefix' => 'admin','namespace' => 'Admin'],function (){
        Route::post('login', 'AuthController@login');
        Route::post('logout','AuthController@logout')->middleware(['auth.guard:admin-api']);
    });

    // Users
    Route::group(['prefix' => 'user','namespace'=>'User'],function (){
        Route::resource('users', 'AuthController');
        Route::get('userAddress/{id}', 'AuthController@userAddress');
        Route::post('login','AuthController@Login');
        Route::post('register','AuthController@register');
        Route::post('getUser', 'AuthController@getUser');
    });


    Route::group(['prefix' => 'user' ,'middleware' => 'auth.guard:user-api'], function (){
        Route::post('profile', function(){
            return \Auth::user();
        });
    });

});

                                                                      // admin-api => guard Name
// Route::group(['middleware' => ['api','checkPassword','checkAdminToken:admin-api'], 'namespace' => 'Api'], function () {
//     Route::get('categories', 'CategoriesController@index');
// });
