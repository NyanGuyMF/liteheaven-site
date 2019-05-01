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
    if (strpos($_SERVER['HTTP_HOST'], '193.187.175.28') !== false) {
        \Log::info('User with IP '.  Request::ip(). ' has requested server by IP address.');
        return view('error/403');
    }

    return view('landing');
});

Route::get('/test', function() {
    return view('test');
});

Route::get('/driver/{driverName}', function($driverName) {
    $driversDir = public_path(). '/drivers';
    switch ($driverName) {
        case 'h2':
            return response()->download($driversDir. '/h2-driver.jar', 'h2-driver.jar');
        case 'postgresql':
            return response()->download($driversDir. '/postgresql-driver.jar', 'postgresql-driver.jar');
        case 'mysql':
            return response()->download($driversDir. '/mysql-driver.jar', 'mysql-driver.jar');

        default:
            return '{"error": "Unknown driver"}';
            break;
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** API routers */
Route::post('api/vkbot', 'VkRequestController@handle')->middleware('vk.validator');
