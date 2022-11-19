@extends('layouts.app')
@section('title', "Home")
@section('content')
    <div class="flex justify-center mt-6">
        <div class="lg:w-3/12 md:w-8/12 sm:w-10/12 w-full p-6 bg-white mx-4 rounded shadow-2xl">
            <h2 class="justify-center mb-4 text-5xl">Registration</h2>
            <form action="{{ route('register')}}" method="POST" autocomplete="off">
                @csrf
            <div class="mb-4">
                <label for="name" class="sr-only"></label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" id="name" class="bg-gray-100 
                border border-transparent 
                focus:text-blue-600 focus:outline-none 
                focus:ring-2 focus:ring-blue-600 
                focus:border-transparent
                @error('name') border-red-500 @enderror 
                w-full p-4 rounded">
                @error('name')
                <span class="text-red-300 mt-2 text-sm">
                {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only"></label>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Enter Username" id="username" class="bg-gray-100 
                border border-transparent 
                focus:text-blue-600 focus:outline-none 
                focus:ring-2 focus:ring-blue-600 focus:border-transparent
                @error('username') border-red-500 @enderror 
                w-full p-4 rounded">
                @error('username')
                <span class="text-red-300 mt-2 text-sm">
                {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only"></label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" id="email" class="bg-gray-100 
                border border-transparent 
                focus:text-blue-600 focus:outline-none 
                focus:ring-2 focus:ring-blue-600 focus:border-transparent
                @error('email') border-red-500 @enderror 
                w-full p-4 rounded">
                @error('email')
                <span class="text-red-300 mt-2 text-sm">
                {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col mb-4 relative w-full">
                <label for="password" class="sr-only"></label>
                <input type="password" name="password" value="{{ old('password') }}" placeholder="Choose a Password" id="password" class="bg-gray-100 
                border border-transparent 
                focus:text-blue-600 focus:outline-none 
                focus:ring-2 focus:ring-blue-600 focus:border-transparent 
                @error('password') border-red-500 @enderror
                show-password
                w-full p-4 rounded">
                @error('password')
                <span class="text-red-300 mt-2 text-sm">
                {{ $message }}
                </span>
                @enderror
                <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <input class="hidden show-password-toggle" id="toggle" type="checkbox" />
                    <label class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer show-password-label" for="toggle">show</label>
                </div>
            </div>
            <div class="col mb-4 relative w-full">
                <label for="password_confirmation" class="sr-only"></label>
                <input type="password" name="password_confirmation" value="" placeholder="Retype Password" id="password_confirmation" class="bg-gray-100 
                border border-transparent focus:text-blue-600 focus:outline-none 
                focus:ring-2 focus:ring-blue-600 focus:border-transparent
                show-confirmation
                 w-full p-4 rounded">
                 <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <input class="hidden show-confirmation-toggle" id="toggle1" type="checkbox" />
                    <label class="bg-gray-300 hover:bg-gray-400 rounded px-2 py-1 text-sm text-gray-600 font-mono cursor-pointer show-confirmation-label" for="toggle1">show</label>
                </div>
            </div>
            <script>
                const passwordToggle = document.querySelector('.show-password-toggle')
                passwordToggle.addEventListener('change', function() {
                const password = document.querySelector('.show-password'),
                    passwordLabel = document.querySelector('.show-password-label')

                if (password.type === 'password') {
                    password.type = 'text'
                    passwordLabel.innerHTML = 'hide'
                } else {
                    password.type = 'password'
                    passwordLabel.innerHTML = 'show'
                }

                password.focus()
                })
                const password2Toggle = document.querySelector('.show-confirmation-toggle')
                password2Toggle.addEventListener('change', function(){
                const password2 = document.querySelector('.show-confirmation'),
                    password2Label = document.querySelector('.show-confirmation-label')    
                if (password2.type === 'password') {
                    password2.type = 'text'
                    password2Label.innerHTML = 'hide'
                } else {
                    password2.type = 'password'
                    password2Label.innerHTML = 'show'
                }
                password2.focus()    
                })
                
            </script>
            <button type="submit" placeholder="Retype Password" class="bg-blue-600 
                text-white hover:bg-gray-100 hover:text-blue-600 
                border border-blue-600 focus:text-blue-600 focus:outline-none 
                focus:ring-2 focus:ring-blue-600 focus:border-transparent 
                w-full p-4 rounded">
                Sign Up
            </button>
            </form>
        </div>
    </div>
@endsection