@extends('layouts.main-layout')
@php
    $active_page = "enquiry";
@endphp
@section('title', 'Enquiry')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div class="w-[100%] h-[260px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/page-header.jpg)]">
        <div class="w-[100%] h-[100%] flex flex-col justify-center" style="background-color: rgba(0,0,0,0.8)">
            <div class="container max-w-[1000px] mx-[auto] text-white">
                <h1 class="!text-[2em] mb-[10px] min-w font-semibold">Book Consultation</h1>
                <ul class="flex space-x-2">
                    <li class="hover:text-orange-500"><a href="/">Home</a></li>
                    <li><i class="bi bi-chevron-right text-white text-[12px]"></i></li>
                    <li>Book Consultation</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container reg-form bg-white rounded shadow w-[90%] lg:max-w-[1000px] mx-[5%] md:mx-[auto]" style="position:relative; top: -40px">
        <form class="w-full">
            <div class="md:flex md:space-x-2">
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">First Name</label>
                    <input type="text" class="form-control app" id="exampleFormControlInput1" >
                </div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input type="text" class="form-control app" id="exampleFormControlInput1" >
                </div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Other Name</label>
                    <input type="text" class="form-control app" id="exampleFormControlInput1" >
                </div>
            </div>
            <div class="md:flex md:space-x-2">
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control app" id="exampleFormControlInput1" >
                </div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Phone</label>
                    <input type="email" class="form-control app" id="exampleFormControlInput1" placeholder="+254 700000000">
                </div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Date & Time</label>
                    <input type="datetime-local" class="form-control app" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="mb-[30px]">
                <div class="form-group mb-[30px]">
                    <input type="checkbox" class="form-control app" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1"> I agree to allow the storage and processing of my information</label>
                </div>
            </div>
            <button class=" mb-[10px] py-[3px] px-[3px]   bg-orange-400 rounded-sm text-white hover:bg-orange-700">Submit</button>
        </form>
    </div>

    @include('Partials.footer')
@endsection
