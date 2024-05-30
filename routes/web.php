<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::resource('feeds', FeedController::class)
    ->names([
        'index' => 'feeds.index',
        'store' => 'feeds.store',
        'destroy' => 'feeds.destroy',
        'show' => 'feeds.show',
        'edit' => 'feeds.edit',
        'update' => 'feeds.update',
    ])
    ->only(['index', 'store', 'destroy', 'show', 'edit', 'update']);

Route::resource('feeds.comments', CommentController::class)
    ->only(['index', 'show', 'store']);
