<?php

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/blog',function (){
    $articles = Article::with('user')->get();

    return view('Dashboard.Blog.blog',[
        'articles' => $articles
    ]);
})->name('Dashboard.blog');

Route::get('/dashboard/blog/create',function (){
    return view('Dashboard.Blog.create-article');
})->name('Dashboard.blog');

Route::get('/dashboard/blog/{id}',function (){
    return view('Dashboard.Blog.edit-article');
})->name('Dashboard.blog');
