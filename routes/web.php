<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OutPracticesController;
use App\Http\Controllers\OurClientsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EDBSController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[IndexController::class,'index'])->name('app.index');
Route::get('/AboutUs',[AboutUsController::class,'index'])->name('app.aboutus');
Route::get('/OurPractices',[OutPracticesController::class,'index'])->name('app.ourpractices');
Route::get('/OurClients',[OurClientsController::class,'index'])->name('app.ourclients');
Route::get('/ContactUs',[ContactUsController::class,'index'])->name('app.contactus');
Route::get('/EDBs',[EDBSController::class,'index'])->name('app.edbs');