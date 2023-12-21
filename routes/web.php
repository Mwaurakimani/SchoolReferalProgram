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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/registration',[HomeController::class,'registration'])->name('registration');













Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/{Article}',[HomeController::class,'article'])->name('article');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::middleware(['guest'])->group(function (){
    Route::get('/login',[HomeController::class,'login'])->name('login');
    Route::get('/register',[HomeController::class,'register'])->name('register');
});

Route::middleware(['auth'])->group(function (){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('Dashboard');


    require_once __DIR__.'/Dashboard/blog.php';


    Route::get('/dashboard/match',function (){
        return view('Dashboard.match');
    })->name('Dashboard.match');

    require_once __DIR__.'/Dashboard/account.php';

    Route::get('/dashboard/credits',function (){
        return view('Dashboard.credits');
    })->name('Dashboard.credits');

});

Route::get('/exec',[\App\Http\Controllers\Cmd::class,'exec']);

require_once __DIR__.'/Vue/index.php';
require_once __DIR__.'/auth.php';
