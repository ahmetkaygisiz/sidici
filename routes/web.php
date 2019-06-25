<?php


Route::get('/','FrontController@index')->name('home');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/faq','FaqController@index')->name('faq');
Route::get('/genres/{id?}','FrontController@genres')->name('genres');
Route::get('/garanti','FrontController@garanti')->name('garanti');
Route::get('/iade','FrontController@iade')->name('iade');
Route::get('/blogSingle','FrontController@blogSingle')->name('blogSingle');
Route::get('/movie/{id?}','FrontController@movie')->name('movie');
Route::get('/movies','FrontController@movies')->name('movies');
Auth::routes();



Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function (){
    Route::get('/', function (){
        return view('admin.index');
    })->name('admin.index');

    Route::resource('film','FilmsController');
    Route::resource('category','CategoriesController');
    Route::get('orders/{type?}','OrderController@Orders');
});

Route::resource('address','AddressController');
Route::group(['middleware' => 'auth'], function (){
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});

//Route::get('checkout','CheckoutController@step1');
Route::get('payment','CheckoutController@payment')->name('checkout.payment');
Route::get('search/{search?}','FilmsController@show')->name('search');
Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');