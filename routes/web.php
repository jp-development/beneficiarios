<?php

use App\Http\Livewire\Admin\Beneficiary;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Beneficiary\Create;
use App\Http\Livewire\Admin\Operators\Create as OperatorsCreate;
use App\Http\Livewire\Admin\Operators\Index;
use App\Http\Livewire\Admin\Options\Index as OptionsIndex;
use App\Http\Livewire\Admin\Reports\Index as ReportsIndex;
use App\Http\Livewire\Admin\Roles\Index as RolesIndex;
use App\Http\Livewire\Admin\Users\Index as UsersIndex;
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
Route::get('operators/create', OperatorsCreate::class);
Route::get('operators', Index::class);
Route::get('settings', OptionsIndex::class);
Route::get('reports', ReportsIndex::class);
Route::get('roles', RolesIndex::class);
Route::get('users', UsersIndex::class);