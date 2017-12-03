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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Account settings routes
Route::get('/instellingen/{type}', 'AccountSettingsController@index')->name('account.settings');
Route::patch('/instellingen/security', 'AccountSettingsController@updateSecurity')->name('account.settings.security');
Route::patch('/instellingen/info', 'AccountSettingsController@updateInformation')->name('account.settings.info');

// Bug report routes
Route::get('/meld-probleem', 'BugController@index')->name('bug.melding');
Route::post('/meld-probleem-hook', 'BugController@send')->name('bug.melding.hook');

// Visie routes
Route::get('/visie', 'VisieController@index')->name('visie.index');

// Crowdfund routes
Route::get('/ondersteun', 'CrowdfundController@index')->name('ondersteuning.index');

// Disclaimer routes
Route::get('disclaimer', 'DisclaimerController@index')->name('disclaimer.index');