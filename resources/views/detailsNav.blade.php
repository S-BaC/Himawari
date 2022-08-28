<div class="details-content flex md:grid md:grid-cols-2 md:grid-rows-8 gap-2 justify-center items-center mt-5 md:h-96 h-52 fixed top-1 md:top-28 md:left-10 w-5/6 md:w-auto">
    <a href="/services" id="d-services" class="details-ele md:p-5 bg-special-01 w-20 h-14 flex items-center justify-center md:w-24 md:h-24">
        <img class="w-10 md:w-auto" src="{{URL::asset('/img/icons/white/clipboard.svg')}}" alt="Icon">
    </a>
    <a href="/employees" id="d-employees" class="details-ele md:p-5 bg-special-02 w-20 h-14 flex items-center justify-center md:w-24 md:h-24">
        <img class="w-10 md:w-auto" src="{{URL::asset('/img/icons/white/usergroup.svg')}}" alt="Icon">
    </a>
    <a href="/stock" id="d-stock" class="details-ele md:p-5 bg-special-03 w-20 h-14 flex items-center justify-center md:w-24 md:h-24">
        <img class="w-10 md:w-auto" src="{{URL::asset('/img/icons/white/archive.svg')}}" alt="Icon">
    </a>
    <a href="/messages" id="d-messages" class="details-ele md:p-5 bg-special-04 w-20 h-14 flex items-center justify-center md:w-24 md:h-24">
        <img class="w-10 md:w-auto" src="{{URL::asset('/img/icons/white/chat.svg')}}" alt="Icon">
        {{-- <p class="text-md text-white">Messages</p> --}}
    </a>
    <a href="/finances" id="d-finances" class="rounded-lg bg-slate-500 md:col-span-2 md:py-3 flex justify-center w-20 h-14 md:w-auto md:h-auto md:gap-5 cursor-pointer hover:bg-orange-700">
        <img class="w-10" src="{{URL::asset('/img/icons/white/yen.svg')}}" alt="Icon">
        <p class="text-xl text-white self-center hidden md:block">{{__("Finances")}}</p>
    </a>
    <a href="/details" id="d-appointments" class="rounded-lg col-span-2 md:py-3 flex justify-center  w-20 h-14 md:w-auto md:h-auto md:gap-5 cursor-pointer bg-slate-300">
        <img class="w-10" src="{{URL::asset('/img/icons/pie.svg')}}" alt="Icon">
        <p class="text-xl self-center hidden md:block">{{__("Appointments")}}</p>
    </a>
</div>
<script>
    let selectedDetails = <?= json_encode($selectedDetails); ?>;
    document.getElementById(selectedDetails).classList.add('selected-details');
</script>