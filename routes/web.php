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

Route::get('/','LICTWelcomeController@index'); 

Route::get('/product/details/{id}','LICTWelcomeController@productDetailsInfo');

Route::get('/category_menu/{id}','LICTWelcomeController@categoryFront');
/* Cart route */
Route::post('/add/to/cart','CartController@addToCartInfo');
Route::get('/show/cart','CartController@showCart');
Route::get('/cart/single/delete/{rowId}','CartController@productDelete');
Route::post('/quantity/update','CartController@quantityUpdate');
/* Cart route */

/* checkout route*/
Route::get('/checkout','CheckOutController@index');
Route::post('/checkout/sign-up','CheckOutController@customerRegistration');
Route::post('/customer/login','CheckoutController@customerLogin');
Route::get('/customer/logout','CheckoutController@customerLogout');
Route::get('/checkout/shipping','CheckOutController@showShippingForm');
Route::post('/save/shipping/details','CheckOutController@saveShippingInfo');
Route::get('/checkout/payment','CheckOutController@showPaymentForm');
Route::post('/checkout/save-order','CheckOutController@saveOrderInfo');
Route::get('/checkout/my-home','CheckOutController@customerHome');
/* checkout route*/
/*customer route*/
Route::get('/login/form','CustomerController@loginView');
Route::post('/sign/up','CustomerController@saveInfo');
Route::post('/sign/in','CustomerController@signIn');

/*customer route*/
/*Manage order */
Route::get('/manage/order','CheckoutController@manageOrder');
/* */
Auth::routes();

Route::get('/dashboard/Admin', 'HomeController@index')->name('dashboard/Admin');
Route::group(['middleware'=>'AuthenticateMiddleware'],function(){
/* category route */
Route::get('/create/category','CategoryController@categoryCreate');
Route::post('/category/save','CategoryController@categoryStore');
Route::get('/manage/category','CategoryController@categoryManage');
Route::get('/category/published/{id}','CategoryController@categoryPublished');
Route::get('/category/unpublished/{id}','CategoryController@categoryUnpublished');
Route::get('/category/delete/{id}','CategoryController@categoryDelete');
Route::get('/category/edit/{id}','CategoryController@categoryEdit');
Route::post('/category/update','CategoryController@categoryUpdate');
/* category route */
/* menufecturer route */
Route::get('/manufacturer/create','ManufacturerController@manufacturerCreate');
Route::post('/manufacturer/save','ManufacturerController@manufacturerStore');
Route::get('/manufacturer/manage','ManufacturerController@manufacturerManage');
Route::get('/manufacturer/published/{id}','ManufacturerController@manufacturerPublished');
Route::get('/manufacturer/unpublished/{id}','ManufacturerController@manufacturerUnpublished');
Route::get('/manufacturer/delete/{id}','ManufacturerController@manufacturerDelete');
Route::get('/manufacturer/edit/{id}','ManufacturerController@manufacturerEdit');
Route::post('/manufacturer/update','ManufacturerController@manufacturerUpdate');
/* menufecturer route */

/* product route*/
Route::get('/product/create','ProductController@productCreate');
Route::post('/product/save','ProductController@productStore');
Route::get('/product/manage','ProductController@productManage');
Route::get('/product/published/{id}','ProductController@productPublished');
Route::get('/product/unpublished/{id}','ProductController@productUnpublished');
Route::get('/product/view/{id}','ProductController@viewProduct');
Route::get('/product/edit/{id}','ProductController@editProduct');
Route::post('/product/update','ProductController@updateProduct');
Route::get('/product/delete/{id}','ProductController@deleteProduct');
});