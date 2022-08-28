<nav class="bg-special-05 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 fixed z-20 w-full">

    <div class="container flex flex-wrap justify-between items-center mx-auto">

        <a href="/" class="logo h-30">
            <img class='w-52 md:w-48 lg:w-auto lg:h-20' src="{{ URL::asset('/img/logo.png') }}" alt="Logo">
        </a>

        <ul class="ml-auto md:ml-0 flex items-center gap-5 md:order-2">
            <li>
                @include('layouts.languages')
                
            </li>
            <li class="hidden md:flex nav-element cursor-pointer">
                <a href="/logout" class="flex gap-2 items-center">
                    <img class="w-8 border-gray-900 border p-1" style="border-radius:50%;"
                    src="{{ URL::asset('/img/icons/logout.svg') }}" alt="Log Out">
                    <p class="hidden lg:block">Log Out</p>
                </a>
            </li>
            <li class="nav-element gap-2 items-center cursor-pointer hidden md:flex">
                <img class="w-8 h-8 border-gray-900 border p-1" style="border-radius:50%;"
                    src="{{ URL::asset('/img/icons/user.svg') }}" alt="icon" />
                <a class="hidden lg:block font-semibold">
                    {{ Auth::user()->name }}
                </a>
            </li>
        </ul>

        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-language-select">
            <ul
                class="justify-between flex p-4 mt-4 rounded-lg md:space-x-6 lg:space-x-8 md:mt-0 md:text-sm md:font-medium lg:gap-3">
                <li id="n-dashboard" class="nav-element flex gap-2 items-center cursor-pointer">
                    <img class="w-8 h-8" src="{{ URL::asset('/img/icons/pie.svg') }}" alt="icon">
                    <a href="/">{{ __('Dashboard') }}</a>
                </li>
                <li id="n-details" class="nav-element flex gap-2 items-center cursor-pointer">
                    <img class="w-8 h-8" src="{{ URL::asset('/img/icons/database.svg') }}" alt="icon">
                    <a href="/employees">{{ __('Details') }}</a>
                </li>
                <li id="n-settings" class="nav-element flex gap-2 items-center cursor-pointer">
                    <img class="w-8 h-8" src="{{ URL::asset('/img/icons/cog.svg') }}" alt="icon">
                    <a href="/settings">{{ __('Settings') }}</a>
                </li>
                <li class="md:hidden nav-element cursor-pointer">
                    <a href="/logout" class="flex gap-2 items-center">
                        <img class="w-8 border-gray-900 border p-1" style="border-radius:50%;"
                        src="{{ URL::asset('/img/icons/logout.svg') }}" alt="Log Out">
                    </a>
                </li>
                <li class="md:hidden nav-element flex gap-2 items-center cursor-pointer">
                    <img class="w-8 h-8 border-gray-900 border p-1" style="border-radius:50%;"
                        src="{{ URL::asset('/img/icons/user.svg') }}" alt="icon" />
                </li>
            </ul>
        </div>


    </div>
</nav>
<div class="h-24"></div>
<script>
    let selectedTab = <?= json_encode($selectedTab); ?>;
    document.getElementById(selectedTab).classList.add('selected-tab');
</script>