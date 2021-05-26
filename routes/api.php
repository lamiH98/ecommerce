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
<<<<<<< HEAD
    Route::post('filter/products', 'ProductController@filterProduct');
=======
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f

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
<<<<<<< HEAD

    // Reviews
    Route::resource('review', 'ReviewController');
    Route::get('getAvg/{id}', 'ReviewController@getAvg');

    // Checkout
    Route::resource('checkout', 'CheckoutController');

=======
    
    // Checkout
//     Route::resource('checkout', 'CheckoutController');
    Route::post('checkout','CheckoutController@store');
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
    // Notifications
    Route::post('save-token','NotificationController@saveToken');
    Route::post('send-notification','NotificationController@sendNotification');

    // Orders
    Route::resource('orders', 'OrderController');
<<<<<<< HEAD
=======
    Route::put('getOrderStatus/{id}', 'OrderController@changeOrderStatus');
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
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
<<<<<<< HEAD
        Route::post('getUser', 'AuthController@getUser')->middleware('auth.guard:api');
    });


    Route::group(['prefix' => 'user' ,'middleware' => 'auth.guard:user-api'], function (){
        Route::post('profile', function(){
            $user = \Auth::user();
=======
        Route::post('getUser', 'AuthController@getUser')->middleware('auth.guard:user-api');
    });


    Route::group(['prefix' => 'user' ,'middleware' => 'auth.guards:user-api'], function (){
        Route::post('profile', function(){
            $user = \Auth::guard('user-api')->user();
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
            return response()->json($user , 200);
        });
    });

});

                                                                      // admin-api => guard Name
// Route::group(['middleware' => ['api','checkPassword','checkAdminToken:admin-api'], 'namespace' => 'Api'], function () {
//     Route::get('categories', 'CategoriesController@index');
// });
