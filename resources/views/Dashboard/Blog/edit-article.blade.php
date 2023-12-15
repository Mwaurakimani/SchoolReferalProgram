@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.main-layout')

@section('title', 'Edit Article')
@php
    $heading = "Edit Article";
    $article_id = request()->id;
@endphp

@section('content')
    <style>
        .display-container > div {
            margin-bottom: 20px;
        }
    </style>
    <div class="flex flex-nowrap">
        <div class="sticky top-0 left-0 z-[1000] bg-gray-900 shadow self-start">
            @include('Partials.dashboard-sidebar')
        </div>
        <div class="w-[100%]  h-[fit-content]">
            @include('Partials.dashboard-heading')
            <div class="container px-[20px]">
                <div class="mb-[-7px]">
                    <ul class="flex text-white ">
                        <li class="rounded text-sm px-[10px] pt-[6px] pb-[12px] z-10 bg-gray-900">
                            <a href="">Article Details</a>
                        </li>
                    </ul>
                </div>
                <livewire:article-entry :mode="'update'" :id="$article_id"/>
            </div>
        </div>
    </div>
@endsection
