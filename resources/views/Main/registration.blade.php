@extends('layouts.main-layout')
@php
    $active_page = "registration";
@endphp
@section('title', 'Our Services')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div class="w-[100%] h-[260px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/page-header.jpg)]">
        <div class="w-[100%] h-[100%] flex flex-col justify-center" style="background-color: rgba(0,0,0,0.8)">
            <div class="container max-w-[1000px] mx-[auto] text-white">
                <h1 class="!text-[2em] mb-[10px] min-w font-semibold">Registration</h1>
                <ul class="flex space-x-2">
                    <li class="hover:text-orange-500"><a href="/">Home</a></li>
                    <li><i class="bi bi-chevron-right text-white text-[12px]"></i></li>
                    <li>Registration</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container reg-form bg-white rounded shadow w-[90%] lg:max-w-[1000px] mx-[5%] md:mx-[auto]" style="position:relative; top: -40px">
        <form class="w-full">
            <div class="md:flex md:space-x-2">
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">First Name *</label>
                    <input type="text" class="form-control app" id="exampleFormControlInput1" >
                </div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Last Name *</label>
                    <input type="text" class="form-control app" id="exampleFormControlInput1" >
                </div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Other Name <span class="italic font-light text-gray-500">(optional)</span></label>
                    <input type="text" class="form-control app" id="exampleFormControlInput1" >
                </div>
            </div>
            <div>
                <div class="form-group md:w-1/3">
                    <label for="exampleFormControlInput1">Date Of Birth *</label>
                    <input type="date" class="form-control app" id="exampleFormControlInput1" >
                </div>
            </div>
            <div class="md:flex md:space-x-2">
                <div class="form-group md:w-1/2">
                    <label for="exampleFormControlInput1">Email *</label>
                    <input type="email" class="form-control app" id="exampleFormControlInput1" >
                </div>
                <div class="form-group md:w-1/2">
                    <label for="exampleFormControlInput1">Phone *</label>
                    <input type="email" class="form-control app" id="exampleFormControlInput1" placeholder="+254 700000000">
                </div>
            </div>
            <div>
                <div class="form-group mb-[30px]">
                    <label for="exampleFormControlInput1">Preferred Course *</label>
                    <input type="email" class="form-control app" id="exampleFormControlInput1" >
                </div>
            </div>
            <div>
                <div class="form-group mb-[30px]">
                    <label for="exampleFormControlInput1">Passport</label>
                    <input type="file" class="form-control app" id="exampleFormControlInput1">
                </div>
            </div>
            <div>
                <div class="form-group mb-[30px]">
                    <label for="exampleFormControlInput1">Eduction Certificates</label>
                    <input type="file" class="form-control app" id="exampleFormControlInput1" >
                </div>
            </div>
            <div>
                <div class="form-group mb-[30px]">
                    <label for="exampleFormControlInput1">Resume</label>
                    <input type="file" class="form-control app" id="exampleFormControlInput1" >
                </div>
            </div>
            <div>
                <p class="text-gray-500 mb-[5px] pl-[10px]">
                    We are committed to protecting and respecting your privacy, and we’ll only use
                    your personal information to administer your account and to provide the products
                    and services you requested from us. From time to time, we would like to contact
                    you about our products and services, as well as other content that may be of
                    interest to you. If you consent to us contacting you for this purpose, please
                    tick below to say how you would like us to contact you:
                </p>
                <div class="form-group mb-[30px]">
                    <input type="checkbox" class="form-control app" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1"> I agree to receive other communications</label>
                </div>
            </div>
            <div class="mb-[30px]">
                <p class="text-gray-500 mb-[5px] pl-[10px]">
                    We need the contact information you provide to us to contact you about our products
                    and services. You may unsubscribe from these communications at anytime. For information
                    on how to unsubscribe, as well as our privacy practices and commitment to protecting
                    your privacy, check out our Privacy Policy.
                </p>
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
