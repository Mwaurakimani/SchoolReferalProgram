@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
@include('Partials.main-navigation')
<div class="container h-[50px] bg-green-300 mt-[20px] mb-[10px] rounded"></div>
<div class="flex space-x-2 h-[600px] container">
    <div class="w-[70%] rounded mb-[30px]">
        <div class="w-[100%] h-[800px] bg-green-300 rounded mb-[10px]" >

        </div>
    </div>
    <div class="w-[30%] rounded">
        <div class=" w-[100%] h-[400px] bg-green-300 mb-[10px]">

        </div>
        <div class=" w-[100%] h-[400px] bg-green-300 mb-[10px]">

        </div>
    </div>
</div>
@endsection
