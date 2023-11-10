<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\FoundController;
use App\Http\Controllers\DonationController;
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
    return view('layout');
});

Route::resource('/Peoples', PeopleController::class);

Route::resource('/Inventorys', InventoryController::class);

Route::resource('/Founds', FoundController::class);

Route::resource('/Donations', DonationController::class);
