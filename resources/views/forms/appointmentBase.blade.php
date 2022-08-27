
<div class="relative mb-6 w-1/3">
    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                clip-rule="evenodd"></path>
        </svg>
    </div>
    <input id="date_time" datepicker="" type="text" name="date_time"
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300 datepicker-input"
        placeholder="Date">
</div>

<div class="mb-6">
    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__("Patient's Name")}}</label>
    <input type="text" id="patient" name="patient"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
        placeholder="John Doe" value="{{$appointment['patient']}}" required>
</div>

<div class="mb-6">
    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__("Doctor's Name")}}</label>
    <input type="text" id="patient" name="patient"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
        placeholder="John Doe" value="{{$appointment['doctor']}}"  required>
</div>

<div class="mb-6">
    <label for="expected" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__("Expected (minutes)")}}</label>
    <input type="number" id="expected" name="expected"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
        placeholder="15" value="{{$appointment['expected_minutes']}}"  required>
</div>
<div class="mb-6">
    <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__("Duration (minutes)")}}</label>
    <input type="number" id="expected" name="duration"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
        placeholder="15" value="{{$appointment['duration_minutes']}}" required>
</div>
<div class="mb-6">
    <label for="department"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">{{__("Department")}}</label>
    <select id="department" name="department"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300">
        <option selected="" disabled>{{__("Choose Department")}}</option>
        <option value="1">{{__("Neurology")}}
        </option>
        <option value="2">{{__("Dermatology")}}</option>
        <option value="3">{{__("General")}}
        <option value="4">{{__("Cardiology")}}
        </option>
        <option value="5">{{__("Orthopedics")}}
        </option>
    </select required>
</div>
<div class="mb-6">
  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__("Description")}}</label>
  <input type="text" id="description" name="description"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
      placeholder="Lorem ipsum" value="{{$appointment['description']}}"  required>
</div>

<div class="w-full flex justify-end">
    <button type="submit"
        class="cursor-pointer text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 mb-6">
        {{__("Submit")}}
    </button>
    <a href="/details"
        class="cursor-pointer text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 mb-6">
        {{__("Cancel")}}
    </a>
</div>