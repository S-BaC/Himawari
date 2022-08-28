<div class="flex justify-between p-3 lg:p-5 items-center mx-3 lg:mx-10 fixed w-full lg:pr-20 bg-special-05 z-10">
    <a href="/" class="logo h-30">
        <img class='w-auto lg:h-20' src="{{ URL::asset('/img/logo.png') }}" alt="Logo">
    </a>

    <div class="nav-container flex gap-16">
        <div id="n-dashboard" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{ URL::asset('/img/icons/pie.svg') }}" alt="icon">
            <a href="/">{{ __('Dashboard') }}</a>
        </div>
        <div id="n-details" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{ URL::asset('/img/icons/database.svg') }}" alt="icon">
            <a href="/details">{{ __('Details') }}</a>
        </div>
        <div id="n-settings" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{ URL::asset('/img/icons/cog.svg') }}" alt="icon">
            <a href="/settings">{{ __('Settings') }}</a>
        </div>
    </div>

    <div class="flex gap-5 items-center cursor-pointer mr-3">

        <div class="flex items-center">
            <img class="w-8 h-8 border-gray-900 border p-1" style="border-radius:50%;" src="{{ URL::asset('/img/icons/languages.svg') }}" alt="icon" onclick="toggleLangs()"/>
            @include('layouts.languages')
        </div>

        <div>
            <img class="w-8 border-gray-900 border p-1" style="border-radius:50%;"
                src="{{ URL::asset('/img/icons/logout.svg') }}" alt="Log Out"
                onclick="document.getElementById('logout-form').submit();">
            <form id="logout-form" class="hidden" action="{{ route('logout') }}" method="GET" class="d-none">
                @csrf
            </form>
        </div>


        <div class="flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8 border-gray-900 border p-1" style="border-radius:50%;"
                src="{{ URL::asset('/img/icons/user.svg') }}" alt="icon" />
            <a class="font-semibold">
                {{ Auth::user()->name }}
            </a>
        </div>
    </div>



</div>

</div>
<div class="h-28"></div>
<script>
    let selectedTab = <?= json_encode($selectedTab); ?>;
    document.getElementById(selectedTab).classList.add('selected-tab');

    let langs = document.getElementById('languages');
    langs.style.display = 'none';
    function toggleLangs() {
        langs.style.display = langs.style.display === 'none' ? 'flex' : 'none';
    }
</script>
