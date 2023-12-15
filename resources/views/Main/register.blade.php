@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
    @include('Partials.main-navigation')
    @vite('resources/scss/Pages/auth.scss')
    <div class="container flex mt-[20px]">
        <form method="POST" action="/register"
              class="signup-form w-[500px] mx-[auto] rounded bg-[var(--container-grey)]">
            @csrf
            @method('POST')
            <h4 class="p-[10px] text-white">Sign Up</h4>
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control app" id="username" aria-describedby="emailHelp"
                       placeholder="Username" value="{{ old('username')}}">
                @error('username')
                <small id="emailHelp" class="form-text text-sm error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control app" id="email" aria-describedby="emailHelp"
                       placeholder="Email" value="{{ old('email')}}">
                @error('email')
                <small id="emailHelp" class="form-text text-sm error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="flex toggle-able justify-between space-x-2">
                    <input name="password" id="password" type="password" class="form-control app"
                           aria-describedby="emailHelp"
                           placeholder="Password" data-visible="false">
                    <i class="bi bi-eye-fill block"></i>
                    <i class="bi bi-eye-slash-fill hidden"></i>
                </div>
                @error('password')
                <small id="emailHelp" class="form-text text-sm error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <div class="flex toggle-able justify-between space-x-2">
                    <input name="password_confirmation" type="password" class="form-control app" id="confirm-password"
                           aria-describedby="emailHelp"
                           placeholder="Confirm Password" data-visible="false">
                    <i class="bi bi-eye-fill block"></i>
                    <i class="bi bi-eye-slash-fill hidden"></i>
                </div>
            </div>
            <div class="px-[30px] mb-[10px] py-[10px] flex flex-row">
                <a href="/login" class="text-blue-500 text-sm hover:underline">Already have an account...</a>
            </div>
            <div class="px-[30px] mb-[20px]">
                <button class="app" type="submit">Register</button>
            </div>
        </form>
    </div>

    <script>
        let toggleAble = $('.toggle-able')

        toggleAble.on('click', (event) => {
            let receiver = $(event.target)

            if (!receiver.is('i')) {
                return;
            }

            let currentElement = $(event.currentTarget)
            let input = currentElement.find('input')

            if (input.data('visible')) {
                input.attr('type', 'text')
            } else {
                input.attr('type', 'password')
            }
            input.data('visible', !input.data('visible'))

            let hidden = currentElement.find('i.hidden')
            let unHidden = currentElement.find('i.block')

            hidden.removeClass('hidden')
            hidden.addClass('block')

            unHidden.removeClass('block')
            unHidden.addClass('hidden')


        })
    </script>
@endsection
