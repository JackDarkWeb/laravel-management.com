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
    return view('home.welcome');
})->name('home');

Route::get('about', function (){

    return view('home.about');
})->name('about');

Route::get('contact', function (){

    return view('home.contact');
})->name('contact');


Route::get('service', function (){

    return view('home.service');
})->name('service');

Route::group(['prefix' => 'announce'], function(){

    Route::get('/', function (){

    })->name('announce');

    Route::get('{slug}-{id}', function ($slug, $id){

        /*
        $post = [];
        return response()->json($post);
        redirect()->back();
        */
    });

    Route::get('recent', function (){

        return view('announces.recent_announce');
    })->name('recent');

    Route::get('category/{category}', function ($category){
            dd($category);
    })->name('category');

});














/*
Route::auth();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

});
*/

