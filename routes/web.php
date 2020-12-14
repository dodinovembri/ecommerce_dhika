<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes([  
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
  'register' =>false,
]);

Route::get('/', 'Frontend\FrontendController@index')->name('home');
Route::get('/frontend', 'Frontend\FrontendController@index')->name('home');
Route::get('/admin', 'Backend\DashboardController@index')->name('dashboard');
Route::get('/home', 'Backend\DashboardController@index')->name('dashboard');
Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');

Route::name('frontend.')->group(function () {
	Route::name('cart.')->group(function () {
		Route::get('frontend/cart/index', 'Frontend\CartController@index')->name('index');
		Route::post('frontend/cart/update', 'Frontend\CartController@update')->name('update');
		Route::get('frontend/cart/create/{id}', 'Frontend\CartController@create')->name('create');
		Route::get('frontend/cart/destroy/{id}', 'Frontend\CartController@destroy')->name('destroy');
		Route::get('frontend/cart/destroy_from_cart/{id}', 'Frontend\CartController@destroy_from_cart')->name('destroy_from_cart');
	});
	Route::name('wishlist.')->group(function () {
		Route::get('frontend/wishlist/index', 'Frontend\WishlistController@index')->name('index');
		Route::get('frontend/wishlist/create/{id}', 'Frontend\WishlistController@create')->name('create');
		Route::post('frontend/wishlist/store', 'Frontend\WishlistController@store')->name('store');
		Route::get('frontend/wishlist/show/{id}', 'Frontend\WishlistController@show')->name('show');
		Route::get('frontend/wishlist/edit/{id}', 'Frontend\WishlistController@edit')->name('edit');
		Route::post('frontend/wishlist/update/{id}', 'Frontend\WishlistController@update')->name('update');
		Route::get('frontend/wishlist/destroy/{id}', 'Frontend\WishlistController@destroy')->name('destroy');
	});	
	Route::name('voucher.')->group(function () {
		Route::post('frontend/voucher/apply', 'Frontend\VoucherController@apply')->name('apply');
		Route::get('frontend/voucher/index', 'Frontend\VoucherController@index')->name('index');
		Route::get('frontend/voucher/create/{id}', 'Frontend\VoucherController@create')->name('create');
		Route::post('frontend/voucher/store', 'Frontend\VoucherController@store')->name('store');
		Route::get('frontend/voucher/show/{id}', 'Frontend\VoucherController@show')->name('show');
		Route::get('frontend/voucher/edit/{id}', 'Frontend\VoucherController@edit')->name('edit');
		Route::post('frontend/voucher/update/{id}', 'Frontend\VoucherController@update')->name('update');
		Route::get('frontend/voucher/destroy/{id}', 'Frontend\VoucherController@destroy')->name('destroy');
	});		
	Route::name('checkout.')->group(function () {
		Route::get('frontend/checkout/index', 'Frontend\CheckoutController@index')->name('index');
		Route::post('frontend/checkout/create', 'Frontend\CheckoutController@create')->name('create');
		Route::post('frontend/checkout/store', 'Frontend\CheckoutController@store')->name('store');
		Route::get('frontend/checkout/show/{id}', 'Frontend\CheckoutController@show')->name('show');
		Route::get('frontend/checkout/edit/{id}', 'Frontend\CheckoutController@edit')->name('edit');
		Route::post('frontend/checkout/update/{id}', 'Frontend\CheckoutController@update')->name('update');
		Route::get('frontend/checkout/destroy/{id}', 'Frontend\CheckoutController@destroy')->name('destroy');
		Route::get('frontend/checkout/confirmation', 'Frontend\CheckoutController@confirmation')->name('confirmation');
	});
	Route::name('my_order.')->group(function () {
		Route::get('frontend/my_order/index', 'Frontend\MyOrderController@index')->name('index');
		Route::get('frontend/my_order/create', 'Frontend\MyOrderController@create')->name('create');
		Route::post('frontend/my_order/store', 'Frontend\MyOrderController@store')->name('store');
		Route::get('frontend/my_order/show/{id}', 'Frontend\MyOrderController@show')->name('show');
		Route::get('frontend/my_order/edit/{id}', 'Frontend\MyOrderController@edit')->name('edit');
		Route::post('frontend/my_order/update/{id}', 'Frontend\MyOrderController@update')->name('update');
		Route::get('frontend/my_order/destroy/{id}', 'Frontend\MyOrderController@destroy')->name('destroy');
	});	
	Route::name('shop.')->group(function () {
		Route::post('frontend/shop/search', 'Frontend\ShopController@search')->name('search');
		Route::get('frontend/shop/searchdirect', 'Frontend\ShopController@searchdirect')->name('searchdirect');
		Route::post('frontend/shop/searchbyfilter', 'Frontend\ShopController@searchbyfilter')->name('searchbyfilter');
		Route::get('frontend/shop/searchbyproduct/{id}', 'Frontend\ShopController@searchbyproduct')->name('searchbyproduct');
		Route::get('frontend/shop/searchbycategory/{id}', 'Frontend\ShopController@searchbycategory')->name('searchbycategory');
		Route::get('frontend/shop/index', 'Frontend\ShopController@index')->name('index');
		Route::get('frontend/shop/create', 'Frontend\ShopController@create')->name('create');
		Route::post('frontend/shop/store', 'Frontend\ShopController@store')->name('store');
		Route::get('frontend/shop/show/{id}', 'Frontend\ShopController@show')->name('show');
		Route::get('frontend/shop/edit/{id}', 'Frontend\ShopController@edit')->name('edit');
		Route::post('frontend/shop/update/{id}', 'Frontend\ShopController@update')->name('update');
		Route::get('frontend/shop/destroy/{id}', 'Frontend\ShopController@destroy')->name('destroy');
	});		
	Route::name('register.')->group(function () {
		Route::get('frontend/register/index', 'Frontend\RegisterController@index')->name('index');
		Route::get('frontend/register/create', 'Frontend\RegisterController@create')->name('create');
		Route::post('frontend/register/store', 'Frontend\RegisterController@store')->name('store');
	});		
	Route::name('register.')->group(function () {
		Route::get('frontend/register/index', 'Frontend\RegisterController@index')->name('index');
		Route::get('frontend/register/create', 'Frontend\RegisterController@create')->name('create');
		Route::post('frontend/register/store', 'Frontend\RegisterController@store')->name('store');
	});	
	Route::name('product.')->group(function () {
		Route::get('frontend/product/show/{id}', 'Frontend\ProductController@show')->name('show');
	});
	Route::name('subscriber.')->group(function () {
		Route::post('frontend/subscriber/store', 'Frontend\SubscriberController@store')->name('store');
	});
});

Route::name('admin.')->group(function () {
	Route::name('about_us.')->group(function () {
		Route::get('admin/about_us/index', 'Backend\AboutUsController@index')->name('index');
		Route::get('admin/about_us/create', 'Backend\AboutUsController@create')->name('create');
		Route::post('admin/about_us/store', 'Backend\AboutUsController@store')->name('store');
		Route::get('admin/about_us/show/{id}', 'Backend\AboutUsController@show')->name('show');
		Route::get('admin/about_us/edit/{id}', 'Backend\AboutUsController@edit')->name('edit');
		Route::post('admin/about_us/update/{id}', 'Backend\AboutUsController@update')->name('update');
		Route::get('admin/about_us/destroy/{id}', 'Backend\AboutUsController@destroy')->name('destroy');
	});	
	Route::name('advantage.')->group(function () {
		Route::get('admin/advantage/index', 'Backend\AdvantageController@index')->name('index');
		Route::get('admin/advantage/create', 'Backend\AdvantageController@create')->name('create');
		Route::post('admin/advantage/store', 'Backend\AdvantageController@store')->name('store');
		Route::get('admin/advantage/show/{id}', 'Backend\AdvantageController@show')->name('show');
		Route::get('admin/advantage/edit/{id}', 'Backend\AdvantageController@edit')->name('edit');
		Route::post('admin/advantage/update/{id}', 'Backend\AdvantageController@update')->name('update');
		Route::get('admin/advantage/destroy/{id}', 'Backend\AdvantageController@destroy')->name('destroy');
	});		
	Route::name('blog.')->group(function () {
		Route::get('admin/blog/index', 'Backend\BlogController@index')->name('index');
		Route::get('admin/blog/create', 'Backend\BlogController@create')->name('create');
		Route::post('admin/blog/store', 'Backend\BlogController@store')->name('store');
		Route::get('admin/blog/show/{id}', 'Backend\BlogController@show')->name('show');
		Route::get('admin/blog/edit/{id}', 'Backend\BlogController@edit')->name('edit');
		Route::post('admin/blog/update/{id}', 'Backend\BlogController@update')->name('update');
		Route::get('admin/blog/destroy/{id}', 'Backend\BlogController@destroy')->name('destroy');
	});	
	Route::name('cart.')->group(function () {
		Route::get('admin/cart/index', 'Backend\CartController@index')->name('index');
		Route::get('admin/cart/create', 'Backend\CartController@create')->name('create');
		Route::post('admin/cart/store', 'Backend\CartController@store')->name('store');
		Route::get('admin/cart/show/{id}', 'Backend\CartController@show')->name('show');
		Route::get('admin/cart/edit/{id}', 'Backend\CartController@edit')->name('edit');
		Route::post('admin/cart/update/{id}', 'Backend\CartController@update')->name('update');
		Route::get('admin/cart/destroy/{id}', 'Backend\CartController@destroy')->name('destroy');
	});
	Route::name('currency.')->group(function () {
		Route::get('admin/currency/index', 'Backend\CurrencyController@index')->name('index');
		Route::get('admin/currency/create', 'Backend\CurrencyController@create')->name('create');
		Route::post('admin/currency/store', 'Backend\CurrencyController@store')->name('store');
		Route::get('admin/currency/show/{id}', 'Backend\CurrencyController@show')->name('show');
		Route::get('admin/currency/edit/{id}', 'Backend\CurrencyController@edit')->name('edit');
		Route::post('admin/currency/update/{id}', 'Backend\CurrencyController@update')->name('update');
		Route::get('admin/currency/destroy/{id}', 'Backend\CurrencyController@destroy')->name('destroy');
	});	
	Route::name('languange.')->group(function () {
		Route::get('admin/languange/index', 'Backend\LanguangeController@index')->name('index');
		Route::get('admin/languange/create', 'Backend\LanguangeController@create')->name('create');
		Route::post('admin/languange/store', 'Backend\LanguangeController@store')->name('store');
		Route::get('admin/languange/show/{id}', 'Backend\LanguangeController@show')->name('show');
		Route::get('admin/languange/edit/{id}', 'Backend\LanguangeController@edit')->name('edit');
		Route::post('admin/languange/update/{id}', 'Backend\LanguangeController@update')->name('update');
		Route::get('admin/languange/destroy/{id}', 'Backend\LanguangeController@destroy')->name('destroy');
	});	
	Route::name('social_media.')->group(function () {
		Route::get('admin/social_media/index', 'Backend\SocialMediaController@index')->name('index');
		Route::get('admin/social_media/create', 'Backend\SocialMediaController@create')->name('create');
		Route::post('admin/social_media/store', 'Backend\SocialMediaController@store')->name('store');
		Route::get('admin/social_media/show/{id}', 'Backend\SocialMediaController@show')->name('show');
		Route::get('admin/social_media/edit/{id}', 'Backend\SocialMediaController@edit')->name('edit');
		Route::post('admin/social_media/update/{id}', 'Backend\SocialMediaController@update')->name('update');
		Route::get('admin/social_media/destroy/{id}', 'Backend\SocialMediaController@destroy')->name('destroy');
	});		
	Route::name('partner.')->group(function () {
		Route::get('admin/partner/index', 'Backend\PartnerController@index')->name('index');
		Route::get('admin/partner/create', 'Backend\PartnerController@create')->name('create');
		Route::post('admin/partner/store', 'Backend\PartnerController@store')->name('store');
		Route::get('admin/partner/show/{id}', 'Backend\PartnerController@show')->name('show');
		Route::get('admin/partner/edit/{id}', 'Backend\PartnerController@edit')->name('edit');
		Route::post('admin/partner/update/{id}', 'Backend\PartnerController@update')->name('update');
		Route::get('admin/partner/destroy/{id}', 'Backend\PartnerController@destroy')->name('destroy');
	});	
	Route::name('user.')->group(function () {
		Route::get('admin/user/index', 'Backend\UserController@index')->name('index');
		Route::get('admin/user/create', 'Backend\UserController@create')->name('create');
		Route::post('admin/user/store', 'Backend\UserController@store')->name('store');
		Route::get('admin/user/show/{id}', 'Backend\UserController@show')->name('show');
		Route::get('admin/user/edit/{id}', 'Backend\UserController@edit')->name('edit');
		Route::post('admin/user/update/{id}', 'Backend\UserController@update')->name('update');
		Route::get('admin/user/destroy/{id}', 'Backend\UserController@destroy')->name('destroy');
	});
	Route::name('payment_method.')->group(function () {
		Route::get('admin/payment_method/index', 'Backend\PaymentMethodController@index')->name('index');
		Route::get('admin/payment_method/create', 'Backend\PaymentMethodController@create')->name('create');
		Route::post('admin/payment_method/store', 'Backend\PaymentMethodController@store')->name('store');
		Route::get('admin/payment_method/show/{id}', 'Backend\PaymentMethodController@show')->name('show');
		Route::get('admin/payment_method/edit/{id}', 'Backend\PaymentMethodController@edit')->name('edit');
		Route::post('admin/payment_method/update/{id}', 'Backend\PaymentMethodController@update')->name('update');
		Route::get('admin/payment_method/destroy/{id}', 'Backend\PaymentMethodController@destroy')->name('destroy');
	});		
	Route::name('product_best.')->group(function () {
		Route::get('admin/product_best/index', 'Backend\ProductBestController@index')->name('index');
		Route::get('admin/product_best/create', 'Backend\ProductBestController@create')->name('create');
		Route::post('admin/product_best/store', 'Backend\ProductBestController@store')->name('store');
		Route::get('admin/product_best/show/{id}', 'Backend\ProductBestController@show')->name('show');
		Route::get('admin/product_best/edit/{id}', 'Backend\ProductBestController@edit')->name('edit');
		Route::post('admin/product_best/update/{id}', 'Backend\ProductBestController@update')->name('update');
		Route::get('admin/product_best/destroy/{id}', 'Backend\ProductBestController@destroy')->name('destroy');
	});											
	Route::name('product_category.')->group(function () {
		Route::get('admin/product_category/index', 'Backend\ProductCategoryController@index')->name('index');
		Route::get('admin/product_category/create', 'Backend\ProductCategoryController@create')->name('create');
		Route::post('admin/product_category/store', 'Backend\ProductCategoryController@store')->name('store');
		Route::get('admin/product_category/show/{id}', 'Backend\ProductCategoryController@show')->name('show');
		Route::get('admin/product_category/edit/{id}', 'Backend\ProductCategoryController@edit')->name('edit');
		Route::post('admin/product_category/update/{id}', 'Backend\ProductCategoryController@update')->name('update');
		Route::get('admin/product_category/destroy/{id}', 'Backend\ProductCategoryController@destroy')->name('destroy');
	});
	Route::name('product_deal.')->group(function () {
		Route::get('admin/product_deal/index', 'Backend\ProductDealController@index')->name('index');
		Route::get('admin/product_deal/create', 'Backend\ProductDealController@create')->name('create');
		Route::post('admin/product_deal/store', 'Backend\ProductDealController@store')->name('store');
		Route::get('admin/product_deal/show/{id}', 'Backend\ProductDealController@show')->name('show');
		Route::get('admin/product_deal/edit/{id}', 'Backend\ProductDealController@edit')->name('edit');
		Route::post('admin/product_deal/update/{id}', 'Backend\ProductDealController@update')->name('update');
		Route::get('admin/product_deal/destroy/{id}', 'Backend\ProductDealController@destroy')->name('destroy');
	});	
	Route::name('product_home.')->group(function () {
		Route::get('admin/product_home/index', 'Backend\ProductHomeController@index')->name('index');
		Route::get('admin/product_home/create', 'Backend\ProductHomeController@create')->name('create');
		Route::post('admin/product_home/store', 'Backend\ProductHomeController@store')->name('store');
		Route::get('admin/product_home/show/{id}', 'Backend\ProductHomeController@show')->name('show');
		Route::get('admin/product_home/edit/{id}', 'Backend\ProductHomeController@edit')->name('edit');
		Route::post('admin/product_home/update/{id}', 'Backend\ProductHomeController@update')->name('update');
		Route::get('admin/product_home/destroy/{id}', 'Backend\ProductHomeController@destroy')->name('destroy');
	});		
	Route::name('product_trend.')->group(function () {
		Route::get('admin/product_trend/index', 'Backend\ProductTrendController@index')->name('index');
		Route::get('admin/product_trend/create', 'Backend\ProductTrendController@create')->name('create');
		Route::post('admin/product_trend/store', 'Backend\ProductTrendController@store')->name('store');
		Route::get('admin/product_trend/show/{id}', 'Backend\ProductTrendController@show')->name('show');
		Route::get('admin/product_trend/edit/{id}', 'Backend\ProductTrendController@edit')->name('edit');
		Route::post('admin/product_trend/update/{id}', 'Backend\ProductTrendController@update')->name('update');
		Route::get('admin/product_trend/destroy/{id}', 'Backend\ProductTrendController@destroy')->name('destroy');
	});	
	Route::name('product_banner.')->group(function () {
		Route::get('admin/product_banner/index', 'Backend\ProductBannerController@index')->name('index');
		Route::get('admin/product_banner/create', 'Backend\ProductBannerController@create')->name('create');
		Route::post('admin/product_banner/store', 'Backend\ProductBannerController@store')->name('store');
		Route::get('admin/product_banner/show/{id}', 'Backend\ProductBannerController@show')->name('show');
		Route::get('admin/product_banner/edit/{id}', 'Backend\ProductBannerController@edit')->name('edit');
		Route::post('admin/product_banner/update/{id}', 'Backend\ProductBannerController@update')->name('update');
		Route::get('admin/product_banner/destroy/{id}', 'Backend\ProductBannerController@destroy')->name('destroy');
	});	
	Route::name('product_stock.')->group(function () {
		Route::get('admin/product_stock/index', 'Backend\ProductStockController@index')->name('index');
		Route::get('admin/product_stock/create', 'Backend\ProductStockController@create')->name('create');
		Route::post('admin/product_stock/store', 'Backend\ProductStockController@store')->name('store');
		Route::get('admin/product_stock/show/{id}', 'Backend\ProductStockController@show')->name('show');
		Route::get('admin/product_stock/edit/{id}', 'Backend\ProductStockController@edit')->name('edit');
		Route::post('admin/product_stock/update/{id}', 'Backend\ProductStockController@update')->name('update');
		Route::get('admin/product_stock/destroy/{id}', 'Backend\ProductStockController@destroy')->name('destroy');
	});					
	Route::name('product.')->group(function () {
		Route::get('admin/product/index', 'Backend\ProductController@index')->name('index');
		Route::get('admin/product/create', 'Backend\ProductController@create')->name('create');
		Route::post('admin/product/store', 'Backend\ProductController@store')->name('store');
		Route::get('admin/product/show/{id}', 'Backend\ProductController@show')->name('show');
		Route::get('admin/product/edit/{id}', 'Backend\ProductController@edit')->name('edit');
		Route::post('admin/product/update/{id}', 'Backend\ProductController@update')->name('update');
		Route::get('admin/product/destroy/{id}', 'Backend\ProductController@destroy')->name('destroy');
	});	
	Route::name('shop_information.')->group(function () {
		Route::get('admin/shop_information/index', 'Backend\ShopInformationController@index')->name('index');
		Route::get('admin/shop_information/create', 'Backend\ShopInformationController@create')->name('create');
		Route::post('admin/shop_information/store', 'Backend\ShopInformationController@store')->name('store');
		Route::get('admin/shop_information/show/{id}', 'Backend\ShopInformationController@show')->name('show');
		Route::get('admin/shop_information/edit/{id}', 'Backend\ShopInformationController@edit')->name('edit');
		Route::post('admin/shop_information/update/{id}', 'Backend\ShopInformationController@update')->name('update');
		Route::get('admin/shop_information/destroy/{id}', 'Backend\ShopInformationController@destroy')->name('destroy');
	});	
	Route::name('supplier.')->group(function () {
		Route::get('admin/supplier/index', 'Backend\SupplierController@index')->name('index');
		Route::get('admin/supplier/create', 'Backend\SupplierController@create')->name('create');
		Route::post('admin/supplier/store', 'Backend\SupplierController@store')->name('store');
		Route::get('admin/supplier/show/{id}', 'Backend\SupplierController@show')->name('show');
		Route::get('admin/supplier/edit/{id}', 'Backend\SupplierController@edit')->name('edit');
		Route::post('admin/supplier/update/{id}', 'Backend\SupplierController@update')->name('update');
		Route::get('admin/supplier/destroy/{id}', 'Backend\SupplierController@destroy')->name('destroy');
	});
	Route::name('wishlist.')->group(function () {
		Route::get('admin/wishlist/index', 'Backend\WishlistController@index')->name('index');
		Route::get('admin/wishlist/create', 'Backend\WishlistController@create')->name('create');
		Route::post('admin/wishlist/store', 'Backend\WishlistController@store')->name('store');
		Route::get('admin/wishlist/show/{id}', 'Backend\WishlistController@show')->name('show');
		Route::get('admin/wishlist/edit/{id}', 'Backend\WishlistController@edit')->name('edit');
		Route::post('admin/wishlist/update/{id}', 'Backend\WishlistController@update')->name('update');
		Route::get('admin/wishlist/destroy/{id}', 'Backend\WishlistController@destroy')->name('destroy');
	});	
	Route::name('order.')->group(function () {
		Route::get('admin/order/index', 'Backend\OrderController@index')->name('index');
		Route::get('admin/order/create', 'Backend\OrderController@create')->name('create');
		Route::post('admin/order/store', 'Backend\OrderController@store')->name('store');
		Route::get('admin/order/show/{id}', 'Backend\OrderController@show')->name('show');
		Route::get('admin/order/edit/{id}', 'Backend\OrderController@edit')->name('edit');
		Route::post('admin/order/update/{id}', 'Backend\OrderController@update')->name('update');
		Route::get('admin/order/destroy/{id}', 'Backend\OrderController@destroy')->name('destroy');
	});	
	Route::name('voucher.')->group(function () {
		Route::get('admin/voucher/index', 'Backend\VoucherController@index')->name('index');
		Route::get('admin/voucher/create', 'Backend\VoucherController@create')->name('create');
		Route::post('admin/voucher/store', 'Backend\VoucherController@store')->name('store');
		Route::get('admin/voucher/show/{id}', 'Backend\VoucherController@show')->name('show');
		Route::get('admin/voucher/edit/{id}', 'Backend\VoucherController@edit')->name('edit');
		Route::post('admin/voucher/update/{id}', 'Backend\VoucherController@update')->name('update');
		Route::get('admin/voucher/destroy/{id}', 'Backend\VoucherController@destroy')->name('destroy');
	});	
});

Route::name('superadmin.')->group(function () {
	Route::name('company.')->group(function () {
		Route::get('superadmin/company/index', 'Backend\CompanyController@index')->name('index');
		Route::get('superadmin/company/create', 'Backend\CompanyController@create')->name('create');
		Route::post('superadmin/company/store', 'Backend\CompanyController@store')->name('store');
		Route::get('superadmin/company/show/{id}', 'Backend\CompanyController@show')->name('show');
		Route::get('superadmin/company/edit/{id}', 'Backend\CompanyController@edit')->name('edit');
		Route::post('superadmin/company/update/{id}', 'Backend\CompanyController@update')->name('update');
		Route::get('superadmin/company/destroy/{id}', 'Backend\CompanyController@destroy')->name('destroy');
	});
});
