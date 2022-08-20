<div class="details-content grid grid-cols-2 grid-rows-8 gap-5 justify-center items-center h-2/3 m-5 h-96 fixed left-10">
    <div id="d-services" class="details-ele bg-special-01 w-24 h-24">
        <img class="m-auto" src="{{URL::asset('/img/icons/white/clipboard.svg')}}" alt="Icon">
        {{-- <p class="text-md text-white">Services</p> --}}
    </div>
    <div id="d-employees" class="details-ele bg-special-02 w-24 h-24">
        <img class="m-auto" src="{{URL::asset('/img/icons/white/usergroup.svg')}}" alt="Icon">
        {{-- <p class="text-md text-white">Employees</p> --}}
    </div>
    <div id="d-stock" class="details-ele bg-special-03 w-24 h-24">
        <img class="m-auto" src="{{URL::asset('/img/icons/white/archive.svg')}}" alt="Icon">
        {{-- <p class="text-md text-white">Stock</p> --}}
    </div>
    <div id="d-messages" class="details-ele bg-special-04 w-24 h-24">
        <img class="m-auto" src="{{URL::asset('/img/icons/white/chat.svg')}}" alt="Icon">
        {{-- <p class="text-md text-white">Messages</p> --}}
    </div>
    <div id="d-finances" class="rounded-lg bg-slate-500 col-span-2 py-3 flex justify-center align-center gap-5 cursor-pointer hover:bg-orange-700">
        <img class="w-10" src="{{URL::asset('/img/icons/white/yen.svg')}}" alt="Icon">
        <p class="text-xl text-white self-center">Finances</p>
    </div>
    <div id="d-appointments" class="rounded-lg col-span-2 py-3 flex justify-center align-center gap-5 cursor-pointer bg-slate-300">
        <img class="w-10" src="{{URL::asset('/img/icons/pie.svg')}}" alt="Icon">
        <p class="text-xl self-center">Appointments</p>
    </div>
</div>
<script>
    let selectedDetails = <?= json_encode($selectedDetails); ?>;
    document.getElementById(selectedDetails).classList.add('selected-details');
</script>