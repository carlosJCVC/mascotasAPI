<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//---------------------- Login user -----------------//
Route::post('login', [
    'as' => 'users.login',
    'uses' => 'AuthController@login',
]);

Route::post('signup', [
    'as' => 'users.signup',
    'uses' => 'AuthController@signup',
]);

//Route::group(['middleware' => 'auth:api'], function() {
    Route::get('logout', [
        'as' => 'users.logout',
        'uses' => 'AuthController@logout',
    ]);
    Route::get('user', [
        'as' => 'users.user',
        'uses' => 'AuthController@user',
    ]);
//});


//------------------------ Users CRUD-------------------------//
Route::get('users', [
    'as' => 'users.index',
    'uses' => 'UserController@index',
]);
Route::post('users', [
    'as' => 'users.store',
    'uses' => 'UserController@store',
]);
Route::get('users/{user}', [
    'as' => 'users.show',
    'uses' => 'UserController@show',
]);
Route::put('users/{user}', [
    'as' => 'users.update',
    'uses' => 'UserController@update',
]);
Route::patch('users/{user}', [
    'as' => 'users.update',
    'uses' => 'UserController@update',
]);
Route::delete('users/{user}', [
    'as' => 'users.destroy',
    'uses' => 'UserController@destroy',
]);


//-----------------------------Mascotas CRUD ----------------//
Route::get('mascotas', [
    'as' => 'mascotas.index',
    'uses' => 'MascotaController@index',
]);
Route::post('mascotas', [
    'as' => 'mascotas.store',
    'uses' => 'MascotaController@store',
]);
Route::get('mascotas/{mascota}', [
    'as' => 'mascotas.show',
    'uses' => 'MascotaController@show',
]);
Route::put('mascotas/{mascota}', [
    'as' => 'mascotas.update',
    'uses' => 'MascotaController@update',
]);
Route::patch('mascotas/{mascota}', [
    'as' => 'mascotas.update',
    'uses' => 'MascotaController@update',
]);
Route::delete('mascotas/{mascota}', [
    'as' => 'mascotas.destroy',
    'uses' => 'MascotaController@destroy',
]);

//--------------------------AdoptionApplication CRUD-------------------------//
Route::get('adoption_applications', [
    'as' => 'adoption_applications.index',
    'uses' => 'AdoptionApplicationController@index',
]);
Route::post('adoption_applications', [
    'as' => 'adoption_applications.store',
    'uses' => 'AdoptionApplicationController@store',
]);
Route::get('adoption_applications/{adoptionApplication}', [
    'as' => 'adoption_applications.show',
    'uses' => 'AdoptionApplicationController@show',
]);
Route::put('adoption_applications/{adoptionApplication}', [
    'as' => 'adoption_applications.update',
    'uses' => 'AdoptionApplicationController@update',
]);
Route::patch('adoption_applications/{adoptionApplication}', [
    'as' => 'adoption_applications.update',
    'uses' => 'AdoptionApplicationController@update',
]);
Route::delete('adoption_applications/{adoptionApplication}', [
    'as' => 'adoption_applications.destroy',
    'uses' => 'AdoptionApplicationController@destroy',
]);