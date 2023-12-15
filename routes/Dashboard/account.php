<?php

use App\Http\Controllers\UserAccountsController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/account',[UserAccountsController::class,'index'])->name('Dashboard.account');

Route::get('/dashboard/account/{username}',function (Request $request,$username){
    $user = User::where('username',$username)->firstOrFail();

    return view('Dashboard.Accounts.profile',[
        'user' => $user
    ]);

})->name('Dashboard.profile');

Route::get('/dashboard/account/{username}/edit',function (Request $request,$username){
    $user = User::where('username',$username)->firstOrFail();

    return view('Dashboard.Accounts.edit-profile');

})->name('Dashboard.profile');

Route::put('/dashboard/account/{username}/update',[])->name('Dashboard.profile');
