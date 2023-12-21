@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div class="banner">
        <div class="container flex flex-col md:flex-row md:h-[500px] md:items-stretch h-[100%]">
            <div class="w-[100%] md:h-[100%] text-center md:!text-left p-[20px] flex flex-col justify-center">
                <h2 class="font-bold !text-[35px] mb-[15px] text-blue-700">Your Trusted Education Consulting Partner</h2>
                <p class="text-[18px] font-semibold mb-[20px] text-gray-600">
                    At Wellpoint Education Agency, we take educational services to the
                    next level, offering you a variety of customized services, to enable
                    you to get the right college or university and to ensure a smooth
                    transition to studying abroad.
                </p>
                <button class="bg-orange-500 w-[fit-content] rounded text-white text-sm p-[8px]">BOOK YOUR CONSULTATION TODAY</button>
            </div>
            <div class="w-[100%] h-[100%]">
                <img class="h-[100%]" loading="lazy" decoding="async" src="https://wellpointeducation.com/wp-content/uploads/2022/03/happy-student.png" alt="" title="happy-student">
            </div>
        </div>
    </div>
    <ul class="banner-bottom flex flex-col justify-center py-[20px]  md:h-[130px] md:flex-row md:space-x-[20px] mb-[50px]">
        <li class="flex">
            <div class="icon-holder">
                <img class="w-[30px]" src="https://img.icons8.com/glyph-neue/64/FFFFFF/america.png" alt="america"/>
            </div>
            <p>Study in 12 Countries</p>
        </li>
        <li class="flex">
            <div class="icon-holder">
                <i class="bi bi-book text-[25px] text-white"></i>
            </div>
            <p>59 Degree & Diploma Courses</p>
        </li>
        <li class="flex">
            <div class="icon-holder">
                <img class="w-[30px]" src="https://img.icons8.com/pastel-glyph/64/FFFFFF/route--v1.png" alt="route--v1"/>
            </div>
            <p>Guided College Applications</p>
        </li>
        <li class="flex">
            <div class="icon-holder">
                <img class="w-[25px]" src="https://img.icons8.com/fluency-systems-filled/48/FFFFFF/chat.png" alt="chat"/>
            </div>
            <p>Professional Counselling</p>
        </li>
    </ul>
    <div class="flex items-center py-[20px] flex-col">
        <h6 class="text-gray-600 mb-[10px]">CORE SERVICES</h6>
        <h1 class="font-semibold" style="color: lightseagreen">What We Do</h1>
    </div>
    <ul class="container pb-[30px] flex justify-center space-x-2 flex-wrap">
        @for($i = 1; $i <= 6;$i++)
            <li class="w-[100%] lg:w-[30%] my-[15px] ">
                <div class="w-[80%] rounded mx-[auto] shadow h-[280px] p-[20px]">
                    <div class="w-[60px] h-[60px] bg-red-900 mb-[20px] mx-[auto]"></div>
                    <h6 class="text-red-500 text-center mb-[20px] font-semibold">University Application</h6>
                    <p class="text-center font-[500] text-gray-500">We guide you through intricate international university admission applications and keep you updated with the progress</p>
                </div>
            </li>
        @endfor
    </ul>
    <div class="w-[100%] py-[50px] flex items-center justify-center bg-purple-700">
        <div class="container flex items-center justify-center mb-[20px]">
            <div class="w-[100%] h-[80vh] bg-red-500" >

            </div>
        </div>
    </div>
    <div class="bg-orange-500 pt-[20px] mb-[30px]">
        <h4 class="text-gray-50 font-bold my-[15px] text-center">Get Started</h4>
        <p class="!text-center max-w-[500px] mx-[auto] mb-[20px] !text-white">Talk to our team today! We will guide you through the entire process of getting
            you started on international studies abroad in a university or college of choice</p>
        <button class="bg-white mb-[30px] !text-orange-500 rounded p-[10px] font-semibold block mx-[auto]">TALK TO US</button>
        <div class="container flex items-center justify-center">
            <img loading="lazy" decoding="async" width="789" height="355" src="https://wellpointeducation.com/wp-content/uploads/2022/03/chillers.png" alt="" title="chillers" srcset="https://wellpointeducation.com/wp-content/uploads/2022/03/chillers.png 789w, https://wellpointeducation.com/wp-content/uploads/2022/03/chillers-480x216.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 789px, 100vw" class="wp-image-163">
        </div>
    </div>
    <div class="mb-[20px]">
        <div class="container flex flex-col md:flex-row py-[30px]">
            <div class="w-[100%] md:w-[50%] mb-[20px] md:mb-[5px] p-[10px]">
                <div class="logo bg-red-500 mb-[20px] h-[50px]">
                    Logo
                </div>
                <p class="!text-center text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aperiam autem delectus doloribus eaque illo itaque molestiae, natus odio temporibus ut vitae voluptatem? Ea esse et maiores ratione sequi.</p>
            </div>
            <div class="w-[100%] md:w-[50%] footer-links">
                <div class="md:flex">
                    <div class="md:w-[50%]">
                        <h2>LEGAL</h2>
                        <ul>
                            <li><a href="">Term & Conditions</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="md:w-[50%]">
                        <h2>CONTACT</h2>
                        <ul>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Guidelines</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container flex items-center flex-col md:flex-row justify-center md:justify-end md:items-start">
            <ul class="h-[50px] py-[15px] md:w-[50%] flex justify-center md:justify-start my-[20px] space-x-[10px] container">
                <li class="px-[5px]"><i class="bi bi-facebook text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
                <li class="px-[5px]"><i class="bi bi-twitter text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
                <li class="px-[5px]"><i class="bi bi-linkedin text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
                <li class="px-[5px]"><i class="bi bi-instagram text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
                <li class="px-[5px]"><i class="bi bi-youtube text-purple-700 text-[20px] px-[0px] w-[22px]"></i></li>
            </ul>
            <div class="flex items-center justify-center md:justify-start md:w-[50%] my-[20px]">
                <p class="font-semibold text-gray-500">Copyright © 2023 Wellpoint Education Agency</p>
            </div>
        </div>
    </div>
@endsection
