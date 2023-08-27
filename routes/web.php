<?php

use App\Http\Controllers\NotificationController;
use App\Services\Notification\Notification;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function (){
	return view('home');
})->name('notification.send.email');

Route::prefix('/notifications')->controller(NotificationController::class)->group(function (){
   Route::get('/send-email','email')->name('notification.form.email');
});
