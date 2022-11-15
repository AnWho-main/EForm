<?php
use App\Http\Controllers\Controller; 
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


Route::get('/',[Controller::class,'view']);

Route::post('/',[Controller::class,'store']);

Route::get('/submit',[Controller::class,'show']);


// Route::get('/', function () {
//     return view('eform');
// });