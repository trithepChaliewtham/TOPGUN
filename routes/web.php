<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

##!! Important try make migrate first, then db:seed --class=<ClassName> 
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
        return view('login');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/documentation', function () {
    return view('documentation');
});

Route::get('/mcharts', function () {
    return view('mcharts');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/collapse', function () {
    return view('collapse');
});

## test Route

Route::get('/test',[TestController::class,'test']);