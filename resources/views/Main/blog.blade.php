@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
    @include('Partials.main-navigation')
    @vite('resources/scss/Pages/index.scss')
    @vite('resources/scss/Pages/blog.scss')
    <div
        class="container rounded  mt-[10px] p-0 h-[fit-content] overflow-hidden text-center flex items-end justify-center banner">
        <div class="w-[100%] h-[100%] pb-[10px]">
            <h4 class="py-[30px] text-white">Blog</h4>
            <p class="text-white text-sm max-w-[500px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque
                esse libero nisi rem voluptates. Aliquam assumenda consectetur eveniet ex illum maiores nesciunt non,
                numquam odio quasi repellat sunt ut voluptas.</p>
        </div>
    </div>
    <div class="container blog-display h-[500px] mx-[auto] md:flex my-[20px] items-start md:space-x-2 ">
        <livewire:list-articles/>
        <div class="w-[30%]">
            <div class="w-[100%] mb-[10px] h-[150px] rounded bg-green-300">
            </div>
            <div class="w-[100%] mb-[10px] h-[600px] rounded bg-green-300">
            </div>
            <div class="w-[100%] mb-[10px] h-[600px] rounded bg-green-300">
            </div>
        </div>
    </div>

    <style>
        .banner {
            background-image: url("/storage/Images/call -of-duty-poster.webp");
            background-position: center;
            @apply;
        }

        .banner > div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.9);
        }
    </style>
@endsection
