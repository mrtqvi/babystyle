<?php

use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\PageController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\FaqController;
use App\Http\Controllers\Admin\Market\SliderController;
use App\Http\Requests\Market\FaqRequest;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', fn() => view('admin.dashboard'))->name('index');

    Route::prefix('market')->as('market.')->group(function () {
        Route::get('brands/fetch', [BrandController::class, "fetch"])->name('brands.fetch');
        Route::post('brands/batch-delete', [BrandController::class, "batchDelete"])->name('brands.batch-delete');
        Route::resource('brands', BrandController::class);

        Route::post('categories/batch-delete', [CategoryController::class, "batchDelete"])->name('categories.batch-delete');
        Route::get('categories/fetch', [CategoryController::class, "fetch"])->name('categories.fetch');
        Route::resource('categories', CategoryController::class);

        Route::post('sliders/batch-delete', [SliderController::class, "batchDelete"])->name('sliders.batch-delete');
        Route::get('sliders/fetch', [SliderController::class, "fetch"])->name('sliders.fetch');
        Route::resource('sliders', SliderController::class);
       
        Route::post('pages/batch-delete', [PageController::class, "batchDelete"])->name('pages.batch-delete');
        Route::get('pages/fetch', [PageController::class, "fetch"])->name('pages.fetch');
        Route::resource('pages', PageController::class);

        Route::post('faqs/batch-delete', [FaqController::class, "batchDelete"])->name('faqs.batch-delete');
        Route::get('faqs/fetch', [FaqController::class, "fetch"])->name('faqs.fetch');
        Route::resource('faqs', FaqController::class);
    });

});