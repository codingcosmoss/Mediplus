<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs' , function () {
    return view('blogs');
})->name('blogs');

Route::get('/contact' , function () {
    return view('contactus');
});

Route::get('/admin2' , function () {
    return view('Admin.app.index');
});

Route::get('/admin2/item', [HomeController::class, 'itemShow'])->name('item.show');
Route::get('/admin2/item/openhours', [HomeController::class, 'openHoursItem'])->name('hours.show');
Route::get('/admin2/item/helper', [HomeController::class, 'HelpersItem'])->name('helpers.show');
Route::get('/admin2/item/numbers', [HomeController::class, 'NumbersItem'])->name('numbers.show');


Route::get('/admin2/item/update/{id}', [HomeController::class, 'itemUpdate'])->name('item.update');
Route::post('/admin2/item/edit/{id}', [HomeController::class, 'itemEdit'])->name('item.edit');
Route::get('/admin2/item/delete/{id}', [HomeController::class, 'itemDelete'])->name('item.delete');
Route::get('/admin2/item/add/{id}', [HomeController::class, 'itemAdd'])->name('item.add');
// Route::get('/admin2/itemHour/add/{id}', [HomeController::class, 'itemHourAdd'])->name('itemHour.add');
Route::get('/admin2/item/addComplete/{id}', [HomeController::class, 'itemAddComplete'])->name('item.addComplete');
// Route::get('/admin2/itemHour/addComplete/{id}', [HomeController::class, 'itemHourAddComplete'])->name('itemHour.addComplete');


Route::get('/admin2/item/button/{id}', [HomeController::class, 'itemButtonShow'])->name('button.show');
Route::get('/admin2/item/button/edit/show/{id}', [HomeController::class, 'itemButtonEditShow'])->name('button.edit.show');
Route::get('/admin2/item/button/add/{id}', [HomeController::class, 'itemButtonAdd'])->name('button.add');
Route::get('/admin2/item/button/updateShow/{id}/{slug}', [HomeController::class, 'ButtonUpdateShow'])->name('button.update.show');
Route::get('/admin2/item/button/update/{id}/{slug}', [HomeController::class, 'ButtonUpdate'])->name('button.update');
Route::get('/admin2/item/button/delete/{id}/{slug}', [HomeController::class, 'ButtonDelete'])->name('button.delete');
// Route::get('/admin2/item'  , function () {
//     return view('Admin.app.item');
// });


Route::resource('home', HomeController::class);
