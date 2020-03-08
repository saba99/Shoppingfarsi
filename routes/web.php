<?php
use Illuminate\Support\Facades\Auth;

/*Route::get('/', function () {
    return view('welcome');
});*/

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


Route::get('/home', 'HomeController@index')->middleware(['auth','verified'])->name('home');


/*Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
 
});*/
// Route::group(['prefix' => 'administrator'] , function () {
Route::prefix('administrator')->group( function () {


    Route::get('/', 'Backend\MainController@mainPage');

    Route::get('categories/{id}/settings', 'Backend\CategoryController@indexSetting')->name('categories.indexSetting');
    Route::post('categories/{id}/settings', 'Backend\CategoryController@saveSetting');
    
    Route::resource('categories', 'Backend\CategoryController');

    Route::resource('attributes-group', 'Backend\AttributeGroupController');

    Route::resource('attributes-value', 'Backend\AttributesValueController');

   
    //Route::post('brands/{fileId}', 'Backend\BrandController@save')->name('brands.save');
    Route::get('brands', 'Backend\AdminBrandController@storeBrand')->name('store.brands');
    Route::post('brands/store', 'Backend\AdminBrandController@brand')->name('brands');
   Route::resource('brands','Backend\BrandController');
   

     Route::post('photos/upload','Backend\PhotoController@upload')->name('photos.upload');
    Route::match(['get,post'],'photos/{id}/storage', 'Backend\PhotoController@storage')->name('photos.storage');
    Route::resource('photos', 'Backend\PhotoController');

   
    Route::resource('products', 'Backend\ProductController');

    Route::resource('simple-image-upload', 'Backend\DropZoneController');


    Route::match(['get', 'post'], '/add-form-banner', 'Backend\BannerController@index')->name('banners.index');
    Route::match(['get','post'], '/add-banner', 'Backend\BannerController@addBanner')->name('banners.add');
      

   Route::get('/view-banners', 'Backend\BannerController@viewBanner')->name('banners.view');
    Route::match(['get','post','patch'],'/edit-banner/{id}', 'Backend\BannerController@editBanner')->name('banners.edit');
    
    Route::patch('/update-banner/{id}', 'Backend\BannerController@update')->name('banners.update');
    Route::match(['delete','get'],'/delete-banner/{id}', 'Backend\BannerController@deleteBanner')->name('banners.delete');


    Route::get('orders','Backend\OrderController@index');
    
    Route::get('comments', 'Backend\CommentController@index')->name('comments.index');
    Route::get('comments/{id}', 'Backend\CommentController@edit')->name('comments.edit');
    Route::post('comments/{id}', 'Backend\CommentController@actions')->name('comments.actions');
    Route::patch('comments/{id}', 'Backend\CommentController@update')->name('comments.update');
    Route::delete('comments/{id}', 'Backend\CommentController@destroy')->name('comments.destroy');


   

});
 

//middleware


Route::group(['middleware'=>'auth'],function(){

Route::get('/profile','Frontend\UserController@profile')->name('user.profile');



    Route::get('/add-product-to-cart/{id}', 'Frontend\CartController@addToCart')->name('cart.add');
    Route::get('/remove-item/{id}', 'Frontend\CartController@removeItem')->name('cart.remove');
    Route::get('/cart', 'Frontend\CartController@getCart')->name('cart.Cart');

    Route::get('/payment-verify','Frontend\OrderController@verify')->name('payment.verify');

   
    
     Route::post('comments/{productId}', 'Frontend\CommentController@store')->name('frontend.comments.store');


});
//Route::get('/', 'Frontend\HomeController@getProductByCategory')->name('productCategory');
Route::resource('/', 'Frontend\HomeController');

Route::get('/homePage', 'Frontend\HomeController@index')->name('homePage');


Route::resource('file', 'Backend\FileController');


Route::get('/cities/{province_id}', 'Auth\RegisterController@getAllCites');

route::post('/register-user', 'Frontend\UserController@register')->name('user.register');


Route::get('products/{slug}','Frontend\ProductController@getProduct')->name('product.single');

//Route::get('products/{id}', 'Frontend\ProductController@getProduct')->name('product.single');

 Route::get('category/{id}/{page?}','Frontend\ProductController@getProductByCategory')->name('category.index');



 ///////
 //Route::view('/landingPage','frontend.home.landingpage');
 Route::get('/landingPage','Frontend\LandingPageController@index')->name('landing-page');

 //Route::view('/products', 'frontend.categories.view');
Route::get('/Products', 'Frontend\ShopController@index')->name('shop.index');

//Route::view('/product', 'frontend.products.view');
Route::get('/Product/{product}', 'Frontend\ShopController@show')->name('shop.show');

//Route::view('/cart', 'frontend.cart.view');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');

Route::view('/checkout', 'frontend.checkout.index');
