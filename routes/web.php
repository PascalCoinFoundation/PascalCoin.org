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
Route::get('/voting', 'IndexController@voting')->name('voting');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/get_started', 'IndexController@getStarted')->name('get_started');
Route::get('/projects', 'IndexController@projects')->name('projects');
Route::post('/contact', 'IndexController@contactSubmit')->name('contact-submit');
Route::post('/newsletter', 'IndexController@newsletterSubmit')->name('newsletter-submit');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/contacts', 'Admin\ContactController@index')->name('admin_contacts');
});
