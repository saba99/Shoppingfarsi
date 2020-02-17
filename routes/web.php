<?php
use Illuminate\Support\Facades\Auth;

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

 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
 
});*/
Route::group(['prefix' => 'administrator'], function () {


    Route::get('/', 'Backend\MainController@mainPage');

    Route::get('categories/{id}/settings', 'Backend\CategoryController@indexSetting')->name('categories.indexSetting');
    Route::post('categories/{id}/settings', 'Backend\CategoryController@saveSetting');
    
    Route::resource('categories', 'Backend\CategoryController');

    Route::resource('attributes-group', 'Backend\AttributeGroupController');

    Route::resource('attributes-value', 'Backend\AttributesValueController');

    Route::resource('brands','Backend\BrandController');


     Route::post('photos/upload','Backend\PhotoController@upload')->name('photos.upload');
     
    Route::resource('photos', 'Backend\PhotoController');

   
    Route::resource('products', 'Backend\ProductController');

    Route::resource('simple-image-upload', 'Backend\DropZoneController');

});





