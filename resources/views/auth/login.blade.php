@extends('layouts.baseLayout')


<div class="flex items-center w-1/3 m-auto mt-10">
    <img class="w-8 h-8 border-gray-900 border p-1" style="border-radius:50%;" src="{{ URL::asset('/img/icons/languages.svg') }}" alt="icon" onclick="toggleLangs()"/>
    @include('layouts.languages')

</div>

@section('login')
    <div id="app">
        <div class="container w-1/3 mt-10 m-auto text-white bg-[#3b5998] p-5">
            
            

            <p class="text-3xl font-weight-thin my-10"> {{__("Admin Login")}} </p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-medium ">{{ __('Email Address') }}</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium ">{{ __('Password') }}</label>
                    <input type="text" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="w-full flex gap-3 justify-end">
                    <button type="submit"
                        class="cursor-pointer text-[#3b5998] bg-[#fff] hover:bg-[#fff]/90 font-bold rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{__('Log In')}}
                        
                    </button>
                    <a href="{{ route('register') }}" 
                        class="cursor-pointer text-white bg-[#D57538] hover:bg-[#D57538]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{__('Register')}}
                    </a>
                </div>

            </form>
        </div>
    </div>
@endsection
