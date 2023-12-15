@extends('layouts.main-layout')

@section('title', 'Home')
@php
    $heading = "Account"
@endphp

@section('content')
    <div class="flex flex-nowrap">
        <div class="sticky top-0 left-0 z-[1000] bg-gray-900 shadow self-start">
            @include('Partials.dashboard-sidebar')
        </div>
        <div class="w-[100%]  h-[fit-content]">
            @include('Partials.dashboard-heading')
            <div class="container mx-[auto] flex items-center">
                <ul>
{{--                    <li><a class="app bg-gray-700 px-[10px] py-[7px]" href="">Create</a></li>--}}
                </ul>
                <ul>
                    <li></li>
                </ul>
            </div>

            <div class="container rounded overflow-hidden">
                <table class="table table-sm text-sm font-thin mb-[20px] !bg-gray-800">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Account Type</th>
                        <th scope="col">Created On</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr onclick="window.location.href='/dashboard/account/{{$user->username}}'">
                            <th scope="row" class="w-[70px]">
                                <div class="w-[50px] h-[50px] rounded-[50%] flex items-center justify-center overflow-hidden">
                                    @if($user->profile_photo_path)
                                        <img class="w-[100%] h-[100%] object-cover" src="/ProfilePictures/{{$user->profile_photo_path}}">
                                    @else
                                        <i class="bi bi-person-fill text-[40px] text-gray-400"></i>
                                    @endif
                                </div>
                            </th>
                            <td>
                                <div class="w-[100%] h-[100%] flex flex-col justify-center space-y-1">
                                    <p>{{ $user->username }}</p>
                                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                                </div>
                            </td>
                            <td>{{ $user->account_type }}</td>
                            <td>{{ $user->created_at  }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
