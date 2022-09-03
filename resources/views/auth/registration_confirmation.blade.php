@extends('layouts.baseLayout')

@section('login')

    

    <div class="container w-96 mt-20 m-auto bg-[#D57538] pt-3 px-5 text-white">
        
        @if ($message = Session::get('msg'))
            <div class="text-center my-5 bg-special-05 text-[#D57538] font-semibold">
                {{ $message }}
            </div>
        @endif



        <div class="flex items-center justify-end mb-5">
            <a href="/lang/en" class="block py-2 px-4 text-sm hover:bg-orange-900 " role="menuitem">
                <div class="inline-flex items-center">
                    English
                </div>
            </a>
            <a href="/lang/jp" class="block py-2 px-4 text-sm hover:bg-orange-900 " role="menuitem">
                <div class="inline-flex items-center">
                    日本語
                </div>
            </a>
            <a href="/lang/mm" class="block py-2 px-4 text-sm hover:bg-orange-900 " role="menuitem">
                <div class="inline-flex items-center">
                    ဗမာစာ
                </div>
            </a>
        </div>

        <p class="text-3xl mb-1"> {{ __('Code Confirmation') }} </p>
        <p class="mb-5"> {{ __('Please kindly see the code in your email.') }} </p>
        {{-- <p class="mb-10"> ({{__("No email verification necessary.")}}) </p> --}}

        <form method="POST" action="{{ route('confirm_registration') }}">
            @csrf
            <div class="row mb-3">
                <label for="code"
                    class="col-md-4 col-form-label text-md-end mb-5">{{ __('Confirmation Code: ') }}</label>

                <div class="col-md-6">
                    <input id="code" name="code" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
                        autofocus>

                    @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="w-full mt-5 flex gap-3 justify-end">
                <a href="{{ route('login') }}"
                    class="cursor-pointer text-white bg-[#3b5998] hover:bg-[#3b5998]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                    {{ __('Log In') }}

                </a>
                <button type="submit"
                    class="cursor-pointer text-[#D57538] bg-[#fff] hover:bg-[#fff]/90 font-bold rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                    {{ __('Confirm') }}
                </button>
            </div>

        </form>
    </div>
@endsection
