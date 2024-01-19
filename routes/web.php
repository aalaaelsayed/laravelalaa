<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::get('/', function () {
    return view('welcome');
});
//Route::get('testHOME',[Controller::class,'indexHome'])->name('testHOME');

Route::get('home',function(){

    return view('home');
})->name('home');


Route::get('about',function(){
    return view('about');
})->name('about');
Route::get('services',function(){
    return view('services');
})->name('services');
Route::get('gaurds',function(){
    return view('gaurds');
})->name('gaurds');
Route::get('contactUs',function(){
    return view('contactUs');
})->name('contact');
});