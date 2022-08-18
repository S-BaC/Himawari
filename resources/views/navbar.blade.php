<div class="flex justify-between p-5 items-center">
    <div class="logo h-30">
        <img class='w-auto h-20' src="{{URL::asset('/img/logo.png')}}" alt="Logo">
    </div>

    <div class="nav-container flex gap-16">
        <div class="nav-element flex gap-2 items-center cursor-pointer selected-tab">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/pie.svg')}}" alt="icon">
            <a>Dashboard</a>
        </div>
        <div class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/database.svg')}}" alt="icon">
            <a>Details</a>
        </div>
        <div class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/yen.svg')}}" alt="icon">
            <a>Finances</a>
        </div>
        <div class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/cog.svg')}}" alt="icon">
            <a>Settings</a>
        </div>
    </div>

    <div class="user flex flex-col items-center">
        <img class="w-8 h-8" src="{{URL::asset('/img/icons/user.svg')}}" alt="icon"/>
        <a>morgan</a>
    </div>
</div>