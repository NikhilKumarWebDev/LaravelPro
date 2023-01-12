<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Index;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('reload');
// });
// Route::view('/','insert');

Route::post('/home/add',[Index::class ,'insert'])->name('home.add');

Route::view('update','updateview');
Route::get('updatedelete',[Index::class ,'updateordelete']);
Route::get('updateData',[Index::class ,'update']);

