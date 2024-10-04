<?php

use Illuminate\Support\Facades\Route;

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
    return view('fronted.index');
});
Route::get('/about', function () {
    return view('fronted.about');
});
Route::get('/members', function () {
    return view('fronted.team');
});
Route::get('/contact', function () {
    return view('fronted.contact');
});
Route::get('/service', function () {
    return view('fronted.service');
});
Route::get('/service-details', function () {
    return view('fronted.service-details');
});
Route::get('/news', function () {
    return view('fronted.blog');
});
Route::get('/news-details', function () {
    return view('fronted.blog-details');
});
Route::get('/photos', function () {
    return view('fronted.photos');
});
Route::get('/videos', function () {
    return view('fronted.videos');
});
Route::get('/blog-details', function () {
    return redirect('news-details');
});
Route::get('/team-details', function () {
    return redirect('members');
});
Route::get('/join-us', function () {
    return view('fronted.member-form');
});



