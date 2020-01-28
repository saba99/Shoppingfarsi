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

Route::namespace('Shopping')->prefix('shopping')->name('shopping.')->group(function () {


    Route::get('/home', 'MainController@HomePage')->name('home');
    Route::get('/contact', 'PageController@Contact')->name('contact');
    Route::get('/features', 'PageController@Features')->name('features');
    Route::get('/AboutUs', 'PageController@AboutUs')->name('AboutUs');

    Route::get('/SearchProduct', 'ProductController@SearchProduct')->name('product.SearchProduct');
    Route::get('/ShopProduct', 'ProductController@ShowProduct')->name('product.ShopProduct');
    Route::resource('/product', 'ProductController');
    Route::get('/BlogSingle', 'BlogController@BlogSingle')->name('blog.BlogSingle');
    Route::get('/BlogSearch', 'BlogController@BlogSearch')->name('blog.BlogSearch');
    Route::resource('/blog', 'BlogController');
    
    Route::get('/checkout2', 'PayController@checkout2')->name('checkout.checkout2');
    Route::get('/checkout3', 'PayController@checkout3')->name('checkout.checkout3');
    Route::get('/checkout4', 'PayController@checkout4')->name('checkout.checkout4');
    Route::resource('/checkout', 'PayController');
});

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/products', 'ProductController');
    

    Route::get('/categories/show', 'CategoryController@show')->name('categories.show');
    Route::resource('/categories', 'CategoryController');
    Route::get('/ShowTable', 'ProductController@ShowTable')->name('products.ShowTable');

    Route::resource('/dashboard', 'DashboardController');

    Route::get('/table', 'DashboardController@table')->name('table');

   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {


    Route::resource('users', 'AdminUserController');  

});
