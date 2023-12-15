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
                <div
                    class="w-[100%] mb-[20px] pt-[10px] bg-gray-900 border-1 border-gray-900 relative pb-[20px] rounded"
                    style="z-index: 100;">
                    <h4 class="p-[10px] mb-[10px]">View Profile</h4>
                    <div class="flex flex-col md:flex-row md:space-x-2 px-[10px]">
                        <div class="w-[90%] md:w-[300px] mx-[auto] mb-[20px] h-[300px]">
                            @if(isset($user->profile_photo_path))
                                <div class="w-[100%] h-[100%] bg-grey-500 relative">
                                    <img src="/ProfilePictures/{{ $user->profile_photo_path }}"  class="w-[100%] h-[100%] object-contain object-center">
                                </div>
                            @else
                                <div class="w-[100%] h-[100%] bg-grey-500 flex items-center justify-center relative">
                                    <i class="bi bi-person-fill text-[200px] text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        <div
                            class="w-[90%] md:pl-[20px] display-container mx-[auto] md:w-[calc(100%_-_300px)] h-[200px]">
                            <div>
                                <label class="text-gray-400 text-sm">Username</label>
                                <p>{{$user->username}}</p>
                            </div>
                            <div>
                                <label class="text-gray-400 text-sm">E-Mail</label>
                                <p>{{$user->email}}</p>
                            </div>
                            <div>
                                <label class="text-gray-400 text-sm">Name</label>
                                <div class="flex space-x-2">
                                    <p>{{$user->first_name}}</p>
                                    <p>{{$user->last_name}}</p>
                                </div>
                            </div>
                            <div>
                                <label class="text-gray-400 text-sm">Account Type</label>
                                <p>{{$user->account_type}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end px-[30px]">
                        <a class="app bg-gray-800 px-[10px] py-[5px] hover:!bg-gray-600"
                           href="/dashboard/account/{{$user->username}}/edit">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
