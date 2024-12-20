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

Route::get('/admin2/item/update/{id}', [HomeController::class, 'itemUpdate'])->name('item.update');
Route::post('/admin2/item/edit/{id}', [HomeController::class, 'itemEdit'])->name('item.edit');
Route::get('/admin2/item/delete/{id}', [HomeController::class, 'itemDelete'])->name('item.delete');



// Route::get('/admin2/item'  , function () {
//     return view('Admin.app.item');
// });


Route::resource('home', HomeController::class);
