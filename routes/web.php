<?php

use App\Http\Controllers\readingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {   //here about is the page route
    return view('aboutus');          //here abourus is the page name to which the route has to open it
});

Route::get('/reading', [ReadingController::class, 'index']);

