@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.main-layout')

@section('title', 'Profile')
@php
    $heading = "Profile"
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
                        <li class="rounded text-sm px-[10px] pt-[6px] z-10 bg-gray-900">
                            <a href="">Profile</a>
                        </li>
                        <li class="rounded text-sm px-[10px] py-[6px] z-10 pb-[12px]">
                            <a href="" class="block hover:underline">Security</a>
                        </li>
                        <li class="rounded text-sm px-[10px] py-[6px] z-10 pb-[12px]">
                            <a href="" class="block hover:underline">Preference</a>
                        </li>
                    </ul>
                </div>
                <livewire:update-profile/>
            </div>
        </div>
    </div>
@endsection
