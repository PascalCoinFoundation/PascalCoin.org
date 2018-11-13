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

Route::get('/', 'IndexController@home')->name('home');
Route::get('/whitepapers', 'IndexController@whitepapers')->name('whitepapers');
Route::get('/whitepaper/download/{whitePaperContent}', 'IndexController@whitepaperDownload')->name('whitepaper_download');
Route::get('/how_to_mine', 'IndexController@howToMine')->name('how_to_mine');
Route::get('/voting', 'IndexController@voting')->name('voting');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/get_started', 'IndexController@getStarted')->name('get_started');
Route::get('/press', 'IndexController@press')->name('press');
Route::get('/funding-transparency', 'IndexController@fundingTransparency')->name('funding_transparency');

Route::post('/contact', 'IndexController@contactSubmit')->name('contact-submit');
Route::post('/newsletter', 'IndexController@newsletterSubmit')->name('newsletter-submit');

Route::get('/development', 'IndexController@development')->name('development');
Route::get('/development/pips', 'IndexController@pips')->name('pips');
Route::get('/development/pips/pip-{pip}', 'IndexController@pip')->name('pip');
Route::get('/development/projects', 'IndexController@projects')->name('projects');
Route::get('/development/projects/{project}', 'IndexController@project')->name('project');
Route::get('/development/rpc', 'IndexController@rpc')->name('rpc');
Route::get('/development/exchange', 'IndexController@exchange')->name('exchange');
Route::get('/content/{page}', 'IndexController@content')->name('content');

Auth::routes();
Route::feeds();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
