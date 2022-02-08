<?php

use Illuminate\Support\Facades\Route;
use Spatie\RouteDiscovery\Discovery\Discover;

Route::get('/', fn() => view('welcome'));
