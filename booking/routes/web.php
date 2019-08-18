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
})->name('welcome');

Route::get('/', 'AnnoncesController@indexHome')->name('index');

Route::get('/details/{id}', 'AnnoncesController@show')->name('details');

Route::get('/contact', function () {
    return view('Guest/contact');
})->name('contact');

Route::get('/formations', function () {
    return view('formations');
})->name('formations');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/detail', function () {
    return view('Admin/detail');
})->name('detail');

Route::get('/mesformations', function () {
    return view('Client/mesformations');
})->name('mesformations');

Route::get('/experience', function () {
    return view('Guest/stage');
})->name('stage');



Route::get('/microsoft', 'AnnoncesController@microsoftHome')->name('microsoft');
Route::get('/office', 'AnnoncesController@officeHome')->name('office');
Route::get('/adobe', 'AnnoncesController@adobeHome')->name('adobe');
Route::get('/comptia', 'AnnoncesController@comptiaHome')->name('comptia');
Route::get('/pearsonvue', 'AnnoncesController@pearsonvueHome')->name('pearsonvue');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::get('formations', ['as' => 'formations', 'uses' => 'FormationsController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('/ajouterFormation', 'FormationsController@create');
Route::get('/formation', 'FormationsController@index')->name('formation');
Route::post('/ajouterFormation', 'FormationsController@store')->name('formation.add');
Route::get('/modifierFormation/{id}', 'FormationsController@show')->name('formation.show');
Route::post('/modifierFormation/{id}', 'FormationsController@update')->name('formation.update');
Route::get('/supprimerFormation/{id}', 'FormationsController@destroy')->name('formation.destroy');


Route::get('/annonce', 'AnnoncesController@index')->name('annonce');
Route::get('/ajouterAnnonce', 'AnnoncesController@create');
Route::post('/ajouterAnnonce', 'AnnoncesController@store')->name('annonce.add');

Route::get('/reserver/{id}', 'ReservationsController@show')->name('reserver.index');
Route::get('/book', 'ReservationsController@book')->name('book');
Route::post('/reserver/{id}', 'ReservationsController@store')->name('reserver');
Route::post('/book', 'ReservationsController@storeGuest')->name('bookStore');
