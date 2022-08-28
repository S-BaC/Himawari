@extends('layouts.baseLayout')

@section('employees')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10">

        @include('detailsNav', ['selectedDetails' => 'd-employees'])

        <div id="employee-details" class="mt-20 mx-2 md:mt-6 md:ml-80 lg:flex justify-evenly">

            <div>
                @if ($data['picture'] === null)
                    <img class="w-80 mb-10" src="{{ URL::asset('/storage/dummy_profile.jpg') }}" alt="">
                @else
                    <img class="w-80 mb-10" src="{{ URL::asset('/storage/' . $data['folder_path'] . '/' . $data['picture']) }}"
                        alt="">
                @endif
    
                <h3 class="font-semibold text-5xl my-5">
                    {{ $data['name'] }}
                </h3>

                <h3 class=" text-3xl mb-10">
                    {{ $data['role'] }}, {{ $data['department'] }}.
                </h3>
            </div>

            <div>

                <table class="w-96 mb-5 text-sm text-left  text-gray-600">
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ __('Date of Birth') }}
                        </th>
                        <td class="py-4 px-6">
                            {{ explode(' ', $data['date_of_birth'])[0] }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ __('Gender') }}
                        </th>
                        <td class="py-4 px-6">
                            @switch($data['gender'])
                                @case(1)
                                    {{ __('Male') }}
                                    @break
                                @case(2)
                                    {{ __('Female') }}
                                    @break
                                @case(3)
                                    {{ __('Other') }}
                            @endswitch
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ __('Email') }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $data['email'] }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ __('Phone No.') }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $data['phone'] }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ __('Tenure') }}
                        </th>
                        <td class="py-4 px-6">
                            {{ explode(' ', $data['start_of_employment'])[0] }} {{ __('to')}}
                            {{ $data['end_of_employment'] === null ? __('Present') : explode(' ', $data['end_of_employment'])[0] }}
                        </td>
                    </tr>
                </table>

                <div class="w-full flex gap-3 justify-center">
                    <a href="/storage/{{ $data['folder_path'] }}/{{ $data['cv'] }}" 
                        class="cursor-pointer text-white bg-[#7D82B8] hover:bg-[#7D82B8]/90 font-medium rounded-lg text-sm px-5 items-center text-center mb-6 flex gap-3">
                        <img class="w-6" src="{{ URL::asset('/img/icons/white/download.svg') }}" alt="">
                        {{__('CV')}}
                    </a>
                    <a href="/employees/edit/{{ $data['id'] }}" 
                        class="cursor-pointer text-white bg-[#43AA8B] hover:bg-[#43AA8B]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{__('Edit')}}
                    </a>
                    <a href="/employees/destroy/{{ $data['id'] }}" 
                        class="cursor-pointer text-white bg-[#8E5572] hover:bg-[#8E5572]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{__('Delete')}}
                    </a>
                    <a href="/employees" 
                        class="cursor-pointer text-white bg-[#D57538] hover:bg-[#D57538]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">
                        {{__('Back to List')}}
                    </a>
                </div>
            </div>
            
            
            
        </div>


    </div>
@endsection
