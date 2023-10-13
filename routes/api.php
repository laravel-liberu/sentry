<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Sentry\Http\Controllers\Sentry;

Route::prefix('api')
    ->middleware(['api', 'auth'])
    ->group(fn () => Route::get('/sentry', Sentry::class)->name('sentry'));
