<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\View_Product;
use App\Http\Controllers\User\CategoryProductController;
use App\Http\Controllers\User\SubCategoryProductController;
use App\Http\Controllers\User\ChildCategoryProductController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\AddToCartController;



Route::get('/',[HomeController::class,'index'])->name('home');

// Category wise product's
Route::get('/category-product/{slug}',[CategoryProductController::class,'index'])->name('category.product');
Route::get('/cate-product',[CategoryProductController::class,'get_product'])->name('get.category.product');
Route::get('/product-filter',[CategoryProductController::class,'get_product'])->name('product.filter');

// sub category product
Route::get('/sub-category-product/{slug}',[SubCategoryProductController::class,'index'])->name('sub.cat.pro');
Route::get('/subcate-product',[SubCategoryProductController::class,'get_product'])->name('get.subCat.pro');
Route::get('/sub_cat-filter',[SubCategoryProductController::class,'get_product'])->name('sub.cat.pro.filter');

// Child category product
Route::get('/child-cat-product/{slug}',[ChildCategoryProductController::class,'index'])->name('child.cat.pro');
Route::get('/childcate-product',[ChildCategoryProductController::class,'get_product'])->name('get.childCat.pro');
Route::get('/child_cat-filter',[ChildCategoryProductController::class,'get_product'])->name('child.cat.pro.filter');

// get product wise brand ajax
Route::get('/brand-pro',[CategoryProductController::class,'get_brand_product'])->name('product.filter.brand');

// Shop
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/get-shop-iteam',[ShopController::class,'get_product'])->name('shop.get');

// view product
Route::get('/product/{slug}',[View_Product::class,'index'])->name('view.product');

// Add To Cart
Route::get('/ad-to-cart',[AddToCartController::class,'Add_To_Cart'])->name('AddToCart');
Route::get('/load_cart',[AddToCartController::class,'loadCart'])->name('loadCart');
/*view full cart*/
//Route::get();

