@extends('layouts.main-layout')

@section('title', 'Home')
@php
    $heading = "Blog";
@endphp

@section('content')
    @vite('resources/scss/Pages/blog.scss')
    <div class="flex flex-nowrap">
        <div class="sticky top-0 left-0 z-[1000] bg-gray-900 shadow self-start">
            @include('Partials.dashboard-sidebar')
        </div>
        <div class="w-[100%]  h-[fit-content]">
            @include('Partials.dashboard-heading')
            <div class="container mx-[auto] h-[50px] flex items-center">
                <ul>
                    <li><a class="app bg-gray-700 px-[10px] py-[7px]" href="/dashboard/blog/create">Create</a></li>
                </ul>
                <ul>
                    <li></li>
                </ul>
            </div>
            <div class="container rounded w-[100%] mb-[10px]">
                @foreach($articles as $article)
                    <a href="/dashboard/blog/{{ $article->id }}"
                       class="rounded overflow-hidden bg-[#2f2f2f] hover:bg-[#3b3b3b] flex w-[100%] mb-[10px] h-[200px] text-white">
                        <div class="w-[250px] h-[100%] flex items-center justify-center bg-gray-700">
                            @if($article->banner)
                                <img class="w-[100%] h-[100%] object-cover" src="/ArticleBanners/{{$article->banner}}">
                            @else
                                <i class="bi bi-image-fill text-[100px]"></i>
                            @endif
                        </div>
                        <div class="w-[calc(100%-200px)] h-[100%] px-[20px] flex flex-col justify-center">
                            <h3 class="py-[5px] underline">{{ $article->title  }}</h3>
                            <p class="text-sm my-[10px] line-clamp-3">{{ $article->description  }}</p>
                            <ul class="flex space-x-2">
                                <li title="Published By" class="h-[20px] mx-[5px] flex items-center justify-center">
                                    <i class="bi bi-person-fill text-[23px] text-[gray] mx-[5px]"></i>
                                    <p class="text-sm">{{ $article->user ? $article->user->username : ""   }}</p>
                                </li>
                                <li title="Publish Time" class="h-[20px] mx-[5px] flex items-center justify-center">
                                    <i class="bi bi-calendar-fill text-[18px] text-[gray] mx-[5px]"></i>
                                    <p class="text-sm">{{ $article->updated_at  }}</p>
                                </li>
                                <li title="Publish Time" class="h-[20px] mx-[5px] flex items-center justify-center">
                                    <i class="bi bi-clock-fill text-[16px] text-[gray] mx-[5px]"></i>
                                    <p class="text-sm">5 min read</p>
                                </li>
                            </ul>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
