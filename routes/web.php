<?php

use App\Http\Controllers\StudentContoller;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Stub\Stub;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('students')->name('students.')->group(function(){
Route::get('/',[StudentContoller::class,'index'])->name('index');
Route::get('/create',[StudentContoller::class,'create'])->name('create');
Route::post('/',[StudentContoller::class,'store'])->name('store');
Route::get('/edit/{id}',[StudentContoller::class,'edit'])->name('edit');
Route::put('/{id}',[StudentContoller::class,'update'])->name('update');
Route::delete('/delete/{id}',[StudentContoller::class,'destroy'])->name('destroy');
});