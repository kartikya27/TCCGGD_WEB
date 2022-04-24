<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TccController;

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
    return view('index');
});
Route::get('the-communication-council',[TccController::class,'index']);
Route::get('/the-communication-council/our-clients',[TccController::class,'showClients']);
Route::get('/the-communication-council/services',[TccController::class,'showServices']);
Route::post('/the-communication-council/mailContact',[TccController::class,'sendContactMail']);

// Route::get('/the-communication-council/email', function () {
//     return view('emails.email_template');
// });
