<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/category', [PageController::class, 'category'])->name('category');
Route::get('/detail/{id}', [PageController::class, 'detail'])->name('detail');
Route::get('/writers', [PageController::class, 'writers'])->name('writers');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/category/data-science', [PageController::class, 'dataScience'])->name('data.science');
Route::get('/category/network-security', [PageController::class, 'networkSecurity'])->name('network.security');
Route::get('/category/{id}', [PageController::class, 'categoryDetail'])->name('category.detail');

