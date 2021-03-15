<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirlineController;

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

/*******************
*@function name:check
*@function:viewing registeration page
*@Author:Kavya B
*@date:010/03/2021
*******************/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/demo','demo');           //demo printing
Route::view('/addflight','addflight'); //add flight 
Route::post("addf",[AirlineController::class,'addFlight']);//inserting flight
Route::get("ftb",[AirlineController::class,'viewFlight']);//disp flight
Route::get("delete/{id}",[AirlineController::class,'deleteFlight']);//delete flight
/*******************
*@function name:check
*@function:viewing registeration page
*@Author:Betty Thomas
*@date:010/03/2021
*******************/
Route::get("bookflight/",[AirlineController::class,'bookFlight']);//view page for the booking of the flights
Route::get("booknow/{fid}",[AirlineController::class,'bookNow']);//view the specific flight with the demanded flight id
Route::get("reduce",[AirlineController::class,'ReduceNow']);//To reduce the count of the seat according to the seat selection
Route::get("selectflight/",[AirlineController::class,'select']);//view page for the booking of the flights
Route::get("searchresult/",[AirlineController::class,'searchResult']);//view page for the booking of the flights
Route::post("seatselected/",[AirlineController::class,'seatSelected']);//view page for the booking of the flights

/*******************
*@function name:check
*@function:viewing registeration page
*@Author:limi mathew
*@date:010/03/2021
*******************/

Route::view('register','register');
Route::post('register1',[AirlineController::class,'register1']);

Route::get('index', function () {
    return view('index');
});
/*******************
*@function name:check
*@function:viewing registeration page
*@Author:limi mathew
*@date:010/03/2021
*******************/
Route::post('check',[AirlineController::class,'check']);
/*******************
*@function name:check
*@function:viewing login page
*@Author:limi mathew
*@date:010/03/2021
*******************/
Route::get('login', function () {
    return view('login');
});

Route::view('payment','payment');
Route::view('userhomepage','userhome');

Route::get('pay',[AirlineController::class,'paymentsuccess']);


Route::get('ticket',[AirlineController::class,'ticketGenerated']);

Route::get('addnotification',[AirlineController::class,'addnotification']);
Route::get('insertnotification',[AirlineController::class,'insertnotification']); 

Route::get('getnoti',[AirlineController::class,'notificationlist']);


Route::get('deletenoti/{id}',[AirlineController::class,'deletenoti']);

Route::get("update/{id}",[AirlineController::class,'updateFlight']);
Route::post("fedit",[AirlineController::class,'updateFlightAction']);

Route::get('notifyuser',[AirlineController::class,'viewnotification']);

Route::view('admin','adminhome');
Route::get('logout',[AirlineController::class,'logout']);