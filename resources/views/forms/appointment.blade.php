<form class="w-2/3 m-auto" method="POST" action="/details/{{$mode}}">
  
    @csrf
  
      <div class="mb-6">
          <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Patient's Name</label>
          <input type="text" id="patient" name="patient"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
              placeholder="John Doe" required>
      </div>

      <div class="mb-6">
          <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Doctor's Name</label>
          <input type="text" id="patient" name="patient"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
              placeholder="John Doe" required>
      </div>

      <div class="mb-6">
          <label for="expected" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expected (minutes)</label>
          <input type="number" id="expected" name="expected"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
              placeholder="15" required>
      </div>
      <div class="mb-6">
          <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration (minutes)</label>
          <input type="number" id="duration" name="duration"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
              placeholder="15" required>
      </div>
      <div class="mb-6">
          <label for="department"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Department</label>
          <select id="department" name="department"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300">
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
        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Duration (minutes)</label>
        <input type="number" id="duration" name="duration"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
            placeholder="15" required>
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
        <input type="text" id="description" name="description"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-300 focus:border-orange-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-300 dark:focus:border-orange-300"
            placeholder="Lorem ipsum" required>
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
  