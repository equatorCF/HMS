<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
//naming the home controller
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);//user dashboard rout
// creating dashboard route (dashboard)
// no dashboardController so create in cmd(php artisan make:controller DashboardController) 
Route::get('/home',[HomeController::class,'redirect']);


Route::middleware([
    'auth:sanctum',
    'verified'
])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/add_doctor_view',[AdminController::class,'addView']);

