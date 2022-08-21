@extends('layouts.baseLayout')

@section('employees')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10">

        @include('detailsNav', ['selectedDetails' => 'd-employees'])

        <div id="employee-list" class="mt-3 ml-80">

            <h3 class="font-thin text-5xl mb-10 flex items-end gap-5">
                Employees
                <span id="" class="add-emp text-lg font-semibold cursor-pointer text-gray-600">
                    <img class="w-8" src="{{URL::asset('/img/icons/add.svg')}}" alt="">
                </span>
            </h3>

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Department
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Role
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Age
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Phone
                            </th>
                            <th scope="col" class="py-3 px-6">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $emp)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$emp['name']}}
                                </th>
                                <td class="py-4 px-6">
                                    {{$emp['department']}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$emp['role']}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$emp['age']}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$emp['phone']}}
                                </td>
                                <td class="py-1 px-6 flex justify-between">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-6" src="{{URL::asset('/img/icons/info.svg')}}" alt=""/>
                                    
                                    </a>
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-6" src="{{URL::asset('/img/icons/edit.svg')}}" alt=""/>

                                    </a>
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <img class="w-6" src="{{URL::asset('/img/icons/delete.svg')}}" alt=""/>

                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="w-2/3 m-auto my-10">
                {{ $employees->links() }}
            </div>

        </div>

        <div id="employee-form" class="hidden ml-80 mt-3">@include('forms.employee', ['mode' => 'add'])</div>
    </div>

    <script>
        let empList = document.querySelector('#employee-list');
        let empForm = document.querySelector('#employee-form');
        document.querySelector('#employee-list .add-emp').addEventListener('click', e => {
            empList.style.display = 'none';
            empForm.style.display = 'block';
        });

    </script>
@endsection
