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

Route::get('/pdf', [
    'uses' => 'VisitorsController@downloadPDF',
    'as' => 'pdf'
    ]
);

Route::post('/', function () {
    return "hello";
});

Route::get('/about', function () {
    return view('main.about');
})->name('main.about');

Route::get('/visitor',function(){
    return view('visitors.visitor');
})->name('visitor');

Route::group(['prefix'=>'/visitors'],function(){

    Route::get('', [
        'uses' => 'VisitorsController@listAllVisitors',
        'as' => 'visitor'
    ]);

    Route::post('', [
        'uses' => 'VisitorsController@visitorCreate',
        'as' => 'visitor.post'
    ]);
});