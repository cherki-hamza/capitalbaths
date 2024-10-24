<?php

use App\Http\Controllers\frontend\SiteController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route for the home site
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        // site routes

        // route for home site page
        Route::get('/' , [SiteController::class,'index'])->name('site');
        // route for about page
        Route::get('/about' , [SiteController::class,'about'])->name('about');
        // route for services page
        Route::get('/services' , [SiteController::class,'services'])->name('services');
        // route for contact page
        Route::get('/contact' , [SiteController::class,'contact'])->name('contact');
        // route for brands page
        Route::get('/brands' , [SiteController::class,'brands'])->name('brands');
        // route for projects page
        Route::get('/projects' , [SiteController::class,'projects'])->name('projects');
        // route for projects_page page
        Route::get('/projects/{project_slug}' , [SiteController::class,'subprojects'])->name('subprojects');
        // route for show subproject
        Route::get('/projects/{project_slug}/{subproject_slug}' , [SiteController::class,'show_subproject'])->name('show_subproject');

        // route for get the products categories page
        Route::get('/category/{category_id}/{category_slug}' , [SiteController::class,'category_products'])->name('category_products');

        // route for shop page
        Route::get('/shop' , [SiteController::class,'shop'])->name('shop');

        // route for shop by brand
        Route::get('/brand/{brand_name}' , [SiteController::class,'brand_shop'])->name('brand_shop');

        // route for single listing shop page
        Route::get('/single_listing_shop' , [SiteController::class,'single_listing_shop'])->name('single_listing_shop');

        // route for normal product detail
        Route::get('/shop/product/normal_details' , [SiteController::class,'normal_product_detail'])->name('normal_product_detail');
        // route for custom product detail
        Route::get('/shop/product/custom_details' , [SiteController::class,'custom_product_detail'])->name('custom_product_detail');

        // route for showrooms
        Route::get('/showrooms' , [SiteController::class,'showrooms'])->name('showrooms');

        // route for shoping cart page
        Route::get('/cart' , [SiteController::class,'shoping_cart'])->name('shoping_cart');

        // route for checkout page
        Route::get('/checkout' , [SiteController::class,'checkout_page'])->name('checkout_page');

        // route for showrooms
        Route::get('/confirm_page' , [SiteController::class,'confirm_page'])->name('confirm_page');

        // route for store contacts
        Route::post('/contact_store', [SiteController::class, 'contact_store'])->name('contact_store');

        }
    );


// admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




