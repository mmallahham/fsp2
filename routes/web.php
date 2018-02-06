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
use app\Http\Controllers\VisitorsController;


Route::get('/', function () {
    return view('main.welcome');
});

Route::post('/', function () {
    return "hello";
});

Route::get('/about', function () {
    return view('main.about');
})->name('main.about');

Route::get('/visitors',function(){
    return view('visitors.visitor');
})->name('visitor');

Route::group(['prefix'=>'/visitor'],function(){

    Route::get('', [
        'uses' => 'VisitorsController@listAllVisitors',
        'as' => 'visitor'
    ]);

    Route::post('', [
        'uses' => 'VisitorsController@visitorCreate',
        'as' => 'visitor.post'
    ]);
});