<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class,'index'] );
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class,'categories'] );
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class,'products'] );
Route::get('/collections/{category_slug}/{product_slug}', [App\Http\Controllers\Frontend\FrontendController::class,'productView'] );


// /collections/' . $categoryItem->slug

// Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
//     Route::get('Stickers/welcome', 'stickers');});
// Route::get('/', function () {
//     return view('Stickers/welcome','stickers'));
// });
// Route::get('/Product', function () {
//     return view('Stickers/Products',compact('products'));
// });
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/signup', [SignUpController::class, 'showSignUpForm'])->name('signup');
Route::post('/signup', [SignUpController::class, 'signUp'])->name('signup.post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category)/edit', 'edit');
        Route::put('/category/[category}', 'update');
    });
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');
        Route::get('product-image/{product_image_id}/delete', 'destroyImage');

        Route::post('product-color/{prod_color_id}', 'updateProdColorQty');
        Route::get('product-color/{prod_color_id}/delete', 'deleteProdColor');
    });
    Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors/create', 'store');
        Route::get('/colors/{color}/edit', 'edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('colors/{color_id}/delete', 'destroy');

        // Route::post('/products', 'store');
        // Route::get('product-image/{product_image_id}/delete', 'destroyImage');
    });










});
