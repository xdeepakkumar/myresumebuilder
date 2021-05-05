<?php

use App\Http\Controllers\UserDetailController;
use GuzzleHttp\Promise\Create;
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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user details
Route::resource('user-detail', 'UserDetailController')->middleware('auth');
//education
Route::resource('education', 'EducationController')->middleware('auth');
//experience
Route::resource('experience', 'ExperienceController')->middleware('auth');
//skill
Route::resource('skill', 'SkillController')->middleware('auth');
//resume
Route::get('resume', 'ResumeController@index')->name('resume.index')->middleware('auth');
//resume download
Route::get('resume/download', 'ResumeController@download')->name('resume.download')->middleware('auth');
