{{-- <div id="languages" class="flex gap-3 text-gray-700 mx-5 font-semibold">
    <a href="/lang/en" class="hover-selected-tab text-sm">English</a>
    <a href="/lang/jp" class="hover-selected-tab text-sm">日本語</a>
    <a href="/lang/mm" class="hover-selected-tab text-sm">ဗမာစာ</a>
</div> --}}

<div class="flex items-center">
    <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex justify-center items-center p-2 text-sm text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
        <img class="w-8 h-8 border-gray-900 border p-1" style="border-radius:50%;" src="{{ URL::asset('/img/icons/languages.svg') }}" alt="icon"/>
    </button>
    <!-- Dropdown -->
    <div class="hidden z-50 my-4 text-base list-none bg-gray-100 rounded divide-y divide-gray-100 shadow dark:bg-gray-700 block" id="language-dropdown-menu" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="inset: 0px auto auto 0px; margin: 0px; transform: translate(588px, 84px);">
      <ul class="py-1" role="none">
        <li>
          <a href="/lang/en" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
              English
            </div>
          </a>
        </li>
        <li>
          <a href="/lang/jp" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
                日本語
            </div>
          </a>
        </li>
        <li>
          <a href="/lang/mm" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
            <div class="inline-flex items-center">
              ဗမာစာ
            </div>
          </a>
        </li>
      </ul>
      
    </div>
    <button 
                data-collapse-toggle="mobile-menu-language-select" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-language-select" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                  </button>
    
</div>