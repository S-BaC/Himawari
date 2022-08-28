@extends('layouts.baseLayout')

@section('services')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10">

        @include('detailsNav', ['selectedDetails' => 'd-services'])

        <div id="service-list" class="mt-20 mx-2 md:mt-6 md:ml-80">

            <div>
                <h3 class="font-thin text-5xl mb-10 flex items-end gap-5">
                    {{__("Rooms")}}
                    <span id="" class="add-room text-lg font-semibold cursor-pointer text-gray-600">
                        <img class="w-8" src="{{ URL::asset('/img/icons/add.svg') }}" alt="">
                    </span>
                </h3>

                <div class="relative shadow-md sm:rounded-lg -z-10">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 -z-10">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Name")}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Beds")}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Size")}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Condition")}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Status")}}
                                </th>
                                {{-- <th scope="col" class="py-3 px-6"></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room )
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $room['name'] }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $room['beds'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $room['width'] }} x {{ $room['length'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        @switch($room['condition'])
                                            @case(1)
                                                {{__("Very Poor")}}
                                                @break
                                            @case(2)
                                                {{__("Poor")}}
                                                @break
                                            @case(3)
                                                {{__("Normal")}}
                                                @break
                                            @case(4)
                                                {{__("Good")}}
                                                @break
                                            @case(5)
                                                {{__("Very Good")}}
                                        @endswitch
                                    </td>
                                    <td class="py-4 px-6">
                                        @if($room['is_vacant'])
                                            {{__("Vacant")}}
                                        @else
                                            {{__("Occupied")}}
                                        @endif
                                    </td>
                                    {{-- <td class="py-1 px-6 flex justify-between">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-6" src="{{ URL::asset('/img/icons/info.svg') }}"
                                                alt="" />

                                        </a>
                                        <a href="/services/edit/{{ $room['id'] }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-6" src="{{ URL::asset('/img/icons/edit.svg') }}"
                                                alt="" />

                                        </a>
                                        <a href="/services/destroy/{{ $room['id'] }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-6" src="{{ URL::asset('/img/icons/delete.svg') }}"
                                                alt="" />

                                        </a>
                                    </td> --}}

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="w-2/3 m-auto my-10">
                    {{ $rooms->links() }}
                </div>

            </div>


        </div>

        <div id="employee-form" class="hidden ml-80 mt-3">@include('forms.employee', ['mode' => 'add'])</div>
        {{-- <div id="employee-form-update" class="hidden ml-80 mt-3">@include('forms.employee', ['mode' => 'update', 'services' => $roomloyees, 'id' => currentId()])</div> --}}

    </div>

    <script>
        let empList = document.querySelector('#service-list');
        let empForm = document.querySelector('#employee-form');
        let empUpdate = document.querySelector('#employee-form-update');
        document.querySelector('#service-list .add-room').addEventListener('click', e => {
            empList.style.display = 'none';
            empForm.style.display = 'block';
        });
    </script>
@endsection
