<?php

use Illuminate\Support\Facades\Route;

Route::any('/{path?}', fn () => redirect()->away('https://www.meetup.com/pombal-ai-talks/events/317259039/'))
    ->where('path', '.*')
    ->withoutMiddleware('web');
