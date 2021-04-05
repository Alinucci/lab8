<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ContactController;

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

Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/addimage', [EmployeeController::class, 'store'])->name('addimage');

Route::get('/employeepage', [EmployeeController::class, 'display']);

Route::get('/contact-us', [ContactController::class, 'contact']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');