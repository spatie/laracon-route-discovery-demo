<?php

use Illuminate\Support\Facades\Route;
use Spatie\RouteDiscovery\Discovery\Discover;


Route::get('/', fn() => view('welcome'));
Discover::views()->in(resource_path('views/discovery'));
