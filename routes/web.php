<?php

use Illuminate\Support\Facades\Route;

// Define the web routes for the application
Route::get('/', function () {
    return view('welcome');
});

// Additional web routes can be defined here
