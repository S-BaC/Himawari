@extends('layouts.baseLayout')


@if ($message = Session::get('msg'))
    <div class="txt-2xl text-italics w-1/3 m-auto my-5">
        {{ $message }}
    </div>
@endif

@section('login')
    <div id="app">
        <div class="container w-96 mt-20 m-auto text-white bg-[#3b5998] p-5">


            {{-- <div id="languages" class="flex gap-3 text-gray-700 mx-5 font-semibold">
    <a href="/lang/en" class="hover-selected-tab text-sm">English</a>
    <a href="/lang/jp" class="hover-selected-tab text-sm">日本語</a>
    <a href="/lang/mm" class="hover-selected-tab text-sm">ဗမာစာ</a>
</div> --}}

            <div class="flex items-center justify-end">
                <a href="/lang/en" class="block py-2 px-4 text-sm hover:bg-blue-900 " role="menuitem">
                    <div class="inline-flex items-center">
                        English
                    </div>
                </a>
                <a href="/lang/jp" class="block py-2 px-4 text-sm hover:bg-blue-900 " role="menuitem">
                    <div class="inline-flex items-center">
                        日本語
                    </div>
                </a>
                <a href="/lang/mm" class="block py-2 px-4 text-sm hover:bg-blue-900 " role="menuitem">
                    <div class="inline-flex items-center">
                        ဗမာစာ
                    </div>
                </a>
            </div>


            <p class="text-3xl font-weight-thin my-10"> {{ __('Admin Login') }} </p>
            <form method="POST" action="{{ route('validate_login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium ">{{ __('Email Address') }}</label>
                    <input type="text" id="email" name="email"
                        class="text-black bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium ">{{ __('Password') }}</label>
                    <input type="password" id="password" name="password"
                        class="text-black bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 @error('password') is-invalid @enderror">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="w-full flex gap-3 justify-end">
                    <button type="submit"
                        class="cursor-pointer text-[#3b5998] bg-[#fff] hover:bg-[#fff]/90 font-bold rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{ __('Log In') }}

                    </button>
                    <a href="{{ route('register') }}"
                        class="cursor-pointer text-white bg-[#D57538] hover:bg-[#D57538]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{ __('Register') }}
                    </a>
                </div>

            </form>
        </div>
    </div>
@endsection
