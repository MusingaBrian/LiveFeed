<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::resource('/feeds', FeedController::class)
    ->names([
        'index' => 'feeds.index',
        'store' => 'feeds.store',
    ])
    ->only(['index', 'store']);
