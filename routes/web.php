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
//Frontend
Route::get('/','HomeController@index' );
Route::get('/trang-chu','HomeController@index');
Route::post('/tim-kiem','HomeController@search');

// danh muc san pham
Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}','BrandProduct@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@details_product');

//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

//Categoryproduct
Route::get('/add-category-product','Categoryproduct@add_category_product');

Route::get('/edit-category-product/{category_product_id}','Categoryproduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','Categoryproduct@delete_category_product');

Route::get('/all-category-product','Categoryproduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}','Categoryproduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','Categoryproduct@active_category_product');

Route::post('/save-category-product','Categoryproduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','Categoryproduct@update_category_product');


//Brandproduct
Route::get('/add-brand-product','Brandproduct@add_brand_product');

Route::get('/edit-brand-product/{brand_product_id}','Brandproduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','Brandproduct@delete_brand_product');

Route::get('/all-brand-product','Brandproduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','Brandproduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','Brandproduct@active_brand_product');

Route::post('/save-brand-product','Brandproduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','Brandproduct@update_brand_product');


//Product
Route::get('/add-product','ProductController@add_product');

Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//cart
Route::post('/save-cart','CartController@save_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');


//checkout
Route::post('/login-customer','CheckoutController@login_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::get('/payment','CheckoutController@payment');


//order
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{orderId}','CheckoutController@view_order');