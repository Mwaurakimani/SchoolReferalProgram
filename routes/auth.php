<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\RateLimiter;

Route::middleware('guest')->group(function (){

    Route::post('/register', function (Request $request) {

        // Perform validation
        $validatedData = $request->validate([
            'username' => 'required|regex:/^[a-zA-Z_]+$/|max:100|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'string', new Password, 'confirmed'],
        ], [
            'username.required' => 'The username field is required.',
            'username.regex' => 'The username field is can only contain letters,numbers and underscore.',
            'username.max' => 'The username field must contain less that 100 characters',
            'username.min' => 'The username field must contain more that 3 characters',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.confirm' => 'The password and password confirmation fields do not match',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        $credentials = [
            'email' =>  $user->email,
            'password' => $validatedData['password']
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back();
        }
    })->name('register_user');

    Route::post('/login', function (Request $request) {

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $messages = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
        ];


        $validatedData = $request->validate($rules, $messages);

        $user = User::where('email',$validatedData['email'])->firstOrFail();

        $credentials = [
            'email' => $user->email,
            'password' => $validatedData['password']
        ];

        $throttleKey = Str::transliterate(
            Str::lower($credentials['email']) . '|' . request()->ip()
        );

        if (RateLimiter::tooManyAttempts($throttleKey, 500)) {
            event(new Lockout(request()));

            $seconds = RateLimiter::availableIn($throttleKey);

            throw ValidationException::withMessages([
                'email' => trans('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
            ]);
        }

        if (!Auth::attempt($credentials)) {
            RateLimiter::hit($throttleKey);

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($throttleKey);

        session()->regenerate();

        if (Auth::attempt($credentials)) {
            Auth::loginUsingId($user->id);
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }

    })->name('login');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function (){

    Route::post('/logout',function (Request $request){

        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect()->route('home');

    })->name('logout');

});
