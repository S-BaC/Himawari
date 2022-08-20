<div class="flex justify-between p-5 items-center mx-10 fixed w-11/12 bg-special-05">
    <div class="logo h-30">
        <img class='w-auto h-20' src="{{URL::asset('/img/logo.png')}}" alt="Logo">
    </div>

    <div class="nav-container flex gap-16">
        <div id="n-dashboard" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/pie.svg')}}" alt="icon">
            <a href="/">Dashboard</a>
        </div>
        <div id="n-details" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/database.svg')}}" alt="icon">
            <a href="/details">Details</a>
        </div>
        <div id="n-finances" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/yen.svg')}}" alt="icon">
            <a href="/finances">Finances</a>
        </div>
        <div id="n-settings" class="nav-element flex gap-2 items-center cursor-pointer">
            <img class="w-8 h-8" src="{{URL::asset('/img/icons/cog.svg')}}" alt="icon">
            <a href="/settings">Settings</a>
            
        </div>
    </div>

    <div class="user flex flex-col items-center">
        <img class="w-8 h-8" src="{{URL::asset('/img/icons/user.svg')}}" alt="icon"/>
        <a>morgan</a>
    </div>
</div>
<div class="h-28"></div>
<script>
    let selectedTab = <?= json_encode($selectedTab); ?>;
    document.getElementById(selectedTab).classList.add('selected-tab');
</script>