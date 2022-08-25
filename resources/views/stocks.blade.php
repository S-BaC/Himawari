@extends('layouts.baseLayout')

@section('services')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10">

        @include('detailsNav', ['selectedDetails' => 'd-stocks'])

        <div id="stock-list" class="mt-3 ml-80">

            <div>
                <h3 class="font-thin text-5xl mb-10 flex items-end gap-5">
                    {{__("Stocks")}}
                    <span id="" class="add-stock text-lg font-semibold cursor-pointer text-gray-600">
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
                                    {{__("Category")}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Quantity")}}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{__("Unit")}}
                                </th>
                                <th scope="col" class="py-3 px-6"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stocks as $stock )
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $stock['product_name'] }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $stock['product_category'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $stock['quantities'] }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $stock['unit'] }}
                                    </td>
                                    
                                    <td class="py-1 px-6 flex justify-between">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-6" src="{{ URL::asset('/img/icons/info.svg') }}"
                                                alt="" />

                                        </a>
                                        <a href="/services/edit/{{ $stock['id'] }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-6" src="{{ URL::asset('/img/icons/edit.svg') }}"
                                                alt="" />

                                        </a>
                                        <a href="/services/destroy/{{ $stock['id'] }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            <img class="w-6" src="{{ URL::asset('/img/icons/delete.svg') }}"
                                                alt="" />

                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="w-2/3 m-auto my-10">
                    {{ $stocks->links() }}
                </div>

            </div>


        </div>

        <div id="employee-form" class="hidden ml-80 mt-3">@include('forms.employee', ['mode' => 'add'])</div>
        {{-- <div id="employee-form-update" class="hidden ml-80 mt-3">@include('forms.employee', ['mode' => 'update', 'services' => $stockloyees, 'id' => currentId()])</div> --}}

    </div>

    <script>
        let empList = document.querySelector('#stock-list');
        let empForm = document.querySelector('#employee-form');
        let empUpdate = document.querySelector('#employee-form-update');
        document.querySelector('#stock-list .add-stock').addEventListener('click', e => {
            empList.style.display = 'none';
            empForm.style.display = 'block';
        });
    </script>
@endsection
