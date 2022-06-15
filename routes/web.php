<?php

use App\Http\Controllers\GerbangController;
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

Route::prefix('/master-data')->group(function () {
    Route::get('/admin', function () {
        return view('Template-Admin.main');
    });
    
  Route::get('/gerbang',[GerbangController::class,'index']);

});
