<?php

use Illuminate\Support\Facades\Route;
use Modules\CClassContact\App\Http\Controllers\CClassContactController;

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

Route::group([], function () {
    Route::resource('cclasscontact', CClassContactController::class)->names('cclasscontact');
});
