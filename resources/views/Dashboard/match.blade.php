@extends('layouts.main-layout')

@section('title', 'Home')
@php
$heading = "Matches"
@endphp

@section('content')
    <div class="flex flex-nowrap">
        <div class="sticky top-0 left-0 z-[1000] bg-gray-900 shadow self-start">
            @include('Partials.dashboard-sidebar')
        </div>
        <div class="w-[100%]  h-[fit-content]">
            @include('Partials.dashboard-heading')
        </div>
    </div>
@endsection
