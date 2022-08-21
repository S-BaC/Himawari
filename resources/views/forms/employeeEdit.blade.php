@extends('layouts.baseLayout')

@section('employees_edit')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10 mt-6 ml-80">

        @include('detailsNav', ['selectedDetails' => 'd-employees'])

<form class="w-2/3 m-auto" method="POST" action="/employees/update/{{$id}}">

  @csrf

    <div class="mb-6">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
        <input type="text" id="name" name="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
            placeholder="John Doe" value={{$employee['name']}} required>
    </div>

    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="picture">Upload
            Photo</label>
        <input
            name="picture"
            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-orange-600 dark:border-orange-600 dark:placeholder-gray-400 mb-3"
            aria-describedby="file_input_help" id="picture" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
            800x400px).</p>
    </div>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Birthday</label>
    <div class="relative mb-6">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <input id="birthday" datepicker="" type="text" name="date_of_birth"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 datepicker-input"
            placeholder="Please Choose Birthday" value={{$employee['date_of_birth']}} required>
    </div>

    <div class="mb-6">
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
        <select id="gender" name="gender"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300" value={{$employee['gender']}}>
            <option selected="">Choose Gender</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
        </select required>
    </div>


    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="cv">Upload
            CV</label>
        <input
            name="cv"
            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-orange-600 dark:border-orange-600 dark:placeholder-gray-400 mb-3"
            aria-describedby="file_input_help" id="cv" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
            800x400px).</p>
    </div>


    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
        <input type="email" id="email" name="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
            placeholder="name@himawari.com" value={{$employee['email']}} required>
    </div>
    <div class="mb-6">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone No.</label>
        <input type="text" id="phone" name="phone"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
            placeholder="+1234567890" value={{$employee['phone']}} required>
    </div>
    <div class="mb-6">
        <label for="department"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Department</label>
        <select id="department" name="department"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300" value={{$employee['department']}}>
            <option selected="">Choose Department</option>
            <option value="1">Dermatology
            </option>
            <option value="2">Neurology</option>
            <option value="3">Cardiology
            <option value="4">General
            </option>
            <option value="5">Orthopedics
            </option>
        </select required>
    </div>
    <div class="mb-6">
        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role</label>
        <select id="role" name="role"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300" value={{$employee['role']}}>
            <option selected="">Choose Role</option>
            <option value="1">Specialist</option>
            <option value="2">Nurse</option>
            <option value="3">Office Staff</option>
            <option value="4">Fellow</option>
            <option value="5">Intern</option>
        </select>
    </div required>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of Employment</label>

    <div class="flex items-baseline mb-6">
        <div class="relative mb-6">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input id="employment-start" datepicker="" type="text" name="start_of_employment"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 datepicker-input"
                placeholder="Start of Employment" value={{$employee['start_of_employment']}} required>
        </div>
        <p class="mx-4 text-gray-500">to</p>
        <div class="relative mb-6">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input id="end_of_employment" datepicker="" type="text" name="employment-end"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 datepicker-input"
                placeholder="End of Employment" value={{$employee['end_of_employment']}}/>
        </div>
    </div>

    <div class="w-full flex justify-end">
        <button type="submit"
            class="cursor-pointer text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 mb-6">
            Submit
        </button>
        <a href="/details"
            class="cursor-pointer text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-6">
            Cancel
        </a>
    </div>
</form>


    </div>
    @endsection