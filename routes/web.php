<?php

use App\Http\Livewire\Admin\Beneficiary;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Beneficiary\Create;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', Dashboard::class);
Route::get('beneficiaries', Beneficiary::class);
Route::get('beneficiaries/create', Create::class);
