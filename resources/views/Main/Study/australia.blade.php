@extends('layouts.main-layout')
@php
    $active_page = "services";
@endphp
@section('title', 'Our Services')

@section('content')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css"
    />
    @include('Partials.main-navigation')
    <div
        class="w-[100%] mb-[40px] h-[260px] bg-[url(https://wellpointeducation.com/wp-content/uploads/2022/03/page-header.jpg)]">
        <div class="w-[100%] h-[100%] flex flex-col justify-center" style="background-color: rgba(0,0,0,0.8)">
            <div class="container max-w-[1000px] mx-[auto] text-white">
                <h1 class="!text-[2em] mb-[10px] min-w font-semibold">Study in Australia</h1>
                <ul class="flex space-x-2">
                    <li class="hover:text-orange-500"><a href="/">Home</a></li>
                    <li><i class="bi bi-chevron-right text-white text-[12px]"></i></li>
                    <li>Study in the Australia</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container pt-[20px] mb-[50px] max-w-[1000px]">
        <div class="flex flex-col md:flex-row md:space-x-[20px] mb-[50px]">
            <div class="md:w-2/3">
                <h1>STUDY IN AUSTRALIA</h1>
                <P>Australia is both a country and a continent and is closest to Indonesia, East Timor, Papua New
                    Guinea, Vanuatu, New Caledonia, New Zealand and the Solomon Islands. It is located in the Indian and
                    Pacific Oceans and is considered by some to be the “world’s largest island.”</P>
                <P>Australia has some of the highest number of universities that are ranked among the top 100 in the
                    world. Australian universities have earned a worldwide reputation for their expert faculty, academic
                    rigor of the subjects as well as research facilities</P>
                <P>You can study at all levels of education from primary and secondary school, to vocational education
                    and training (VET), from English language courses to higher education (including universities).</P>
                <p>
                    Students can bring their spouse/dependents along while studying in Australian Universities.One of
                    themajor pulls of studying in Australia is that it has the unique benefit of allowing spouses to
                    accompany students while they pursue a course in the country. In certain cases even parents can
                    accompany the student in the role of guardians.
                </p>
            </div>
            <div class="md:w-1/3">
                <img class="img-fluid" src="/storage/au.jpg" alt="" style="border-radius:10px;margin-top: 70px">
            </div>
        </div>


        <ul class="flex flex-wrap md:!flex-nowrap md:space-x-2 mb-[20px]">
            @foreach([1,2,3,4] as $item)
                <li class="h-[300px] w-[100%] p-[10px] mb-[10px] rounded-tl-[50px] rounded-br-[50px] border-4 border-orange-500">
                    <div class="w-[100px] h-[100px] bg-red-900 mx-auto mb-[10px]">

                    </div>
                    <h6 class="font-semibold text-center text-red-800  mb-[10px]">Funding</h6>
                    <p class="text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi dicta, dolor eius illum
                        inventore nam nemo o
                    </p>
                </li>
            @endforeach
        </ul>

        <div>
            <ul class="flex space-x-2">
                @foreach([1,2,3] as $item1)
                    <li>
                        <button class="rounded-sm py-[3px] px-[5px] bg-blue-400 text-white">Button{{$item1}}</button>
                    </li>
                @endforeach
            </ul>
            <ul class="w-[100%] h-[300px] p-[10px] border border-1">
                <li>Intake</li>
            </ul>
        </div>
    </div>
    <style>
        h1, h3 {
            padding: 10px 0;
        }

        p {
            color: grey;
        }
    </style>

    @include('Partials.footer')
@endsection
