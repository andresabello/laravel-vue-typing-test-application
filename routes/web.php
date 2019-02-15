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
    return view('typing-test');
});


Route::get('/backend', function () {

    return view('backend', [
        'tests' => \App\TypingTest::paginate(25)
    ]);
});

Route::post('submit-test', 'TypingTestController@submit');
