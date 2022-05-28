<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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
    return view('welcome2');
});

Route::get('/redirects',[HomeController::class,"index"]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/organization', 'OrganizationController@index')->name('organization');
Route::get('/campaign', 'CampaignController@index')->name('campaign');

//routes organizations
Route::resource('organizations', 'OrganizationController');
Route::resource('campaigns', 'CampaignController');
