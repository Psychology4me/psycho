<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BulgarianController;

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

Route::get('',[EnglishController::class, 'home'])->name('en_home');
Route::get('about',[EnglishController::class, 'about_me'])->name('en_about_me'); // Google Advertisements
Route::get('online-counselling',[EnglishController::class, 'online_counselling'])->name('en_online_counselling'); // Service related
//Route::get('courses',[EnglishController::class, 'courses'])->name('en_courses'); // Service
//Route::get('apps',[EnglishController::class, 'apps'])->name('en_apps'); // Service
Route::get('contact',[EnglishController::class, 'contact'])->name('en_contact');
Route::get('policy',[EnglishController::class, 'policy'])->name('en_policy');
Route::get('sitemap',[EnglishController::class, 'sitemap'])->name('en_sitemap');
Route::get('additional-information',[EnglishController::class, 'en_additional_info'])->name('en_additional_info');
Route::get('magazine',[EnglishController::class, 'en_magazine'])->name('en_magazine');
Route::get('psychology',[EnglishController::class, 'en_psychology'])->name('en_psychology');
Route::get('self-improvement',[EnglishController::class, 'en_self_improvement'])->name('en_self_improvement');
Route::get('/search/', [EnglishController::class, 'search'])->name('search');
Route::get('mental-health',[EnglishController::class, 'en_mental_health'])->name('en_mental_health');
Route::get('disclaimer',[EnglishController::class, 'en_disclaimer'])->name('en_disclaimer');
Route::get('{slug}',[PostsController::class, 'single'])->name('en_single');
