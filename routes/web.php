<?php

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
})->name('index');

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

// Account settings routes
Route::get('/admin/instellingen/{type}', 'AccountSettingsController@index')->name('account.settings');
Route::patch('/admin/instellingen/security', 'AccountSettingsController@updateSecurity')->name('account.settings.security');
Route::patch('/admin/instellingen/info', 'AccountSettingsController@updateInformation')->name('account.settings.info');

// Bug report routes
Route::get('/admin/meld-probleem', 'BugController@index')->name('bug.melding');
Route::post('/admin/meld-probleem-hook', 'BugController@send')->name('bug.melding.hook');

// News Routes
Route::get('/admin/nieuws', 'NewsController@backendIndex')->name('news.admin.index');
Route::get('/admin/nieuws/nieuw', 'NewsController@create')->name('news.admin.create');
Route::post('admin/news/opslaan', 'NewsController@store')->name('news.admin.store');

// Visie routes
Route::get('/visie', 'VisieController@index')->name('visie.index');

// Crowdfund routes
Route::get('/ondersteun', 'CrowdfundController@index')->name('ondersteuning.index');

// Disclaimer routes
Route::get('/disclaimer', 'DisclaimerController@index')->name('disclaimer.index');