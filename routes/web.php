<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PatientController;
use App\Models\Transactions;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale',$locale);
    return redirect()->back();
});



Auth::routes();




Route::get('/home',[HomeController::class,'index'])->name('home');


//patient detail form
Route::get('/patient_register',[PatientController::class,'patient_register'])->name('patient_register');

//patient form submit
Route::post('/insert',[PatientController::class,'insert'])->name('insert');

//patient detail list
Route::get('/patient_list',[IndexController::class,'patient_detail_list'])->name('patient_list');


//patient or donor acccount
Route::get('/donor',[IndexController::class,'donor_list'])->name('donor');

//after donation submit
Route::get('/donate_amount/{id}',[DonateController::class,'amount'])->name('donate_amount');

//donation form
Route::get('/donate_donate/{id}',[DonateController::class,'donate_donate'])->name('donate_donate');


Route::get('/send-mail',[MailController::class,'send_mail'])->name('send-mamil');

Route::get('/donate_all',[DonateController::class,'donate_all'])->name('donate_all');


Route::get('/donate_amount_all',[DonateController::class,'donation_amount_all'])->name('donate_amount_all');

// Route::get('/donate_amount_all',function ()
// {
//    return 'hello';
// });

// Route::get('/t',function ()
// {
//     // App::setLocale('nep');
//     App::setLocale('nep');
//     dd(App::getLocale());
//     // return 'hele';
// });
