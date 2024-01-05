@extends('layouts.main-layout')

@section('title', 'Home')
@php
$active_page = "Home";
@endphp

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div class="banner">
        <div class="container flex flex-col md:flex-row md:h-[500px] md:items-stretch h-[100%]">
            <div class="w-[100%] md:h-[100%] text-center md:!text-left p-[20px] flex flex-col justify-center">
                <h2 class="font-bold !text-[35px] mb-[15px] text-purple-700">Begin your Journey</h2>
                <p class="text-[18px] font-semibold mb-[20px] text-gray-600">
                    Find out more about studying in the most popular international study destinations
                    worldwide with our extensive guides including information on applications, visas,
                    universities, courses, costs, scholarships and more.
                </p>
                <button onclick="window.location.href='/book'" class="bg-purple-500 w-[fit-content] rounded text-white text-sm p-[8px]">BOOK YOUR CONSULTATION TODAY</button>
            </div>
            <div class="w-[100%] h-[100%] flex items-end">
                <img loading="lazy" decoding="async" src="/storage/system/bannerimage.png" alt="" title="happy-student">
            </div>
        </div>
    </div>
    <div class="flex items-center py-[20px] mb-[50px] flex-col container">
        <h1 class="font-semibold pb-[30px]" style="color: #a750ee">Where Can you Study</h1>
        <ul class="flex flex-wrap md:flex-nowrap container mx-auto mb-[20px]">
            <li class="w-full md:w-1/3 mb-[10px]">
                <div class="w-[250px] h-[330px] shadow mx-auto py-[10px] hover:[transform:scale(1.05)]" style="transition: all ease-in 250ms;cursor: pointer">
                    <div class="w-[80px] h-[80px] overflow-hidden bg-blue-300 rounded-[50%] mx-auto" >
                        <span class="fi fi-us text-[80px]"></span>
                    </div>
                    <h4 class="text-center text-purple-600 py-[5px]">USA</h4>
                    <p class="text-[14px] px-[10px] text-center text-gray-500">
                        Embark on an enriching academic journey in the USA! Discover top
                        universities, world-class faculty, and vibrant campus life. Unlock
                        your potential in a global hub of innovation and excellence.
                    </p>
                    <a href="/study/usa" class="block text-center text-blue-500 py-[10px]">Read More</a>
                </div>
            </li>
            <li class="w-full md:w-1/3 mb-[10px]">
                <div class="w-[250px] h-[fit-content] shadow mx-auto py-[10px] hover:[transform:scale(1.05)]" style="transition: all ease-in 250ms;cursor: pointer">
                    <div class="w-[80px] h-[80px] overflow-hidden bg-blue-300 rounded-[50%] mx-auto" >
                        <span class="fi fi-ca text-[80px]"></span>
                    </div>
                    <h4 class="text-center text-purple-600 py-[5px]">Canada</h4>
                    <p class="text-[14px] px-[10px] text-center text-gray-500">
                        Embark on an enriching academic journey in Canada! Explore
                        top universities, diverse programs, and a welcoming community.
                        Benefit from high-quality education, stunning landscapes, and
                        a global perspective. Study in Canada for an exceptional experience.
                    </p>
                    <a href="/study/canada" class="block text-center text-blue-500 py-[10px]">Read More</a>
                </div>
            </li>
            <li class="w-full md:w-1/3 mb-[10px]">
                <div class="w-[250px] h-[330px] shadow mx-auto py-[10px] hover:[transform:scale(1.05)]" style="transition: all ease-in 250ms;cursor: pointer">
                    <div class="w-[80px] h-[80px] overflow-hidden bg-blue-300 rounded-[50%] mx-auto" >
                        <span class="fi fi-au text-[80px]"></span>
                    </div>
                    <h4 class="text-center text-purple-600 py-[5px]">Australia</h4>
                    <p class="text-[14px] px-[10px] text-center text-gray-500">
                        In Australia, education is your passport to brilliance!
                        Dive into vibrant learning, explore diverse cultures, and
                        let the stunning landscapes inspire your academic journey.
                        Unleash your potentia</p>
                    <a href="/study/australia" class="block text-center text-blue-500 py-[10px]">Read More</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="flex items-center py-[20px] flex-col">
        <h6 class="text-gray-600 mb-[10px]">CORE SERVICES</h6>
        <h1 class="font-semibold" style="color: #a750ee">What We Do</h1>
    </div>
    <ul class="container pb-[30px] flex justify-center space-x-2 flex-wrap">
        <li class="w-[100%] lg:w-[30%] my-[15px] ">
            <div class="w-[80%] rounded mx-[auto] shadow h-[280px] p-[20px]">
                <div class="w-[60px] h-[60px] mb-[20px] mx-[auto]">
                    <img width="64" height="64" src="https://img.icons8.com/glyph-neue/64/7c7c7c/education.png" alt="education"/>
                </div>
                <h6 class="text-purple-500 text-center mb-[20px] font-semibold">Counseling</h6>
                <p class="text-center font-[500] text-gray-500">
                    Navigate your academic path with expert course counseling.
                    Unlock your potential and shape your future with personalized
                    guidance.
                </p>
            </div>
        </li>
        <li class="w-[100%] lg:w-[30%] my-[15px] ">
            <div class="w-[80%] rounded mx-[auto] shadow h-[280px] p-[20px]">
                <div class="w-[60px] h-[60px] mb-[20px] mx-[auto]">
                    <img width="45" height="45" src="https://img.icons8.com/ios-filled/50/7c7c7c/diploma.png" alt="diploma"/>
                </div>
                <h6 class="text-purple-500 text-center mb-[20px] font-semibold">Course Selection</h6>
                <p class="text-center font-[500] text-gray-500">
                    Diversify you futures with our multiple course options.
                    Tailor your education, seize opportunities, and shape your journey.
                </p>
            </div>
        </li>
        <li class="w-[100%] lg:w-[30%] my-[15px] ">
            <div class="w-[80%] rounded mx-[auto] shadow h-[280px] p-[20px]">
                <div class="w-[60px] h-[60px] mb-[20px] mx-[auto]">
                    <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/7c7c7c/passport.png" alt="passport"/>
                </div>
                <h6 class="text-purple-500 text-center mb-[20px] font-semibold">Visa Application</h6>
                <p class="text-center font-[500] text-gray-500">We guide you through intricate international university admission applications and keep you updated with the progress</p>
            </div>
        </li>
    </ul>
    <div class="w-[100%] py-[50px] flex items-center justify-center">
        <div class="container flex items-center justify-center mb-[20px]">
            <div class="w-[100%] h-[80vh] bg-purple-500" >

            </div>
        </div>
    </div>
    <div class="bg-purple-700 pt-[20px] mb-[30px]">
        <h4 class="text-gray-50 font-bold my-[15px] text-center">Get Started</h4>
        <p class="!text-center max-w-[500px] mx-[auto] mb-[20px] !text-white">Talk to our team today! We will guide you through the entire process of getting
            you started on international studies abroad in a university or college of choice</p>
        <button onclick="window.location.href='/enquiry'" class="bg-white mb-[30px] !text-gray-500 rounded p-[10px] font-semibold block mx-[auto]">TALK TO US</button>
        <div class="container flex items-center justify-center">
            <img loading="lazy" decoding="async" width="789" height="355" src="https://wellpointeducation.com/wp-content/uploads/2022/03/chillers.png" alt="" title="chillers" srcset="https://wellpointeducation.com/wp-content/uploads/2022/03/chillers.png 789w, https://wellpointeducation.com/wp-content/uploads/2022/03/chillers-480x216.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 789px, 100vw" class="wp-image-163">
        </div>
    </div>
    @include('Partials.footer')
@endsection
