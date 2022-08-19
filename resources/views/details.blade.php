@extends('layouts.baseLayout')

@section('details')

@include('navbar', ['selectedTab' => 'n-details'])

<div class="grid grid-cols-3 mx-10">
    <div class="details-content grid gridtext-center -cols-2 grid-rows-7 gap-5 justify-center items-center w-2/3 h-2/3 m-5">
        <div class="details-ele bg-special-01">
            <img class="w-3/5 m-auto" src="{{URL::asset('/img/icons/white/clipboard.svg')}}" alt="Icon">
            <p class="text-xl text-white text-center w-full">Services</p>
        </div>
        <div class="details-ele bg-special-02">
            <img class="w-3/5 m-auto" src="{{URL::asset('/img/icons/white/usergroup.svg')}}" alt="Icon">
            <p class="text-xl text-white text-center w-full">Employees</p>
        </div>
        <div class="details-ele bg-special-03">
            <img class="w-3/5 m-auto" src="{{URL::asset('/img/icons/white/archive.svg')}}" alt="Icon">
            <p class="text-xl text-white text-center w-full">Stock</p>
        </div>
        <div class="details-ele bg-special-04">
            <img class="w-3/5 m-auto" src="{{URL::asset('/img/icons/white/chat.svg')}}" alt="Icon">
            <p class="text-xl text-white text-center w-full">Inquiries</p>
        </div>
        <div class="rounded-lg bg-slate-500 col-span-2 py-3 flex justify-center align-center gap-5 cursor-pointer hover:bg-orange-700">
            <img class="w-10" src="{{URL::asset('/img/icons/white/yen.svg')}}" alt="Icon">
            <p class="text-xl text-white self-center">Finances</p>
        </div>
    </div>
    <div class="col-span-2">
        <h3 class="font-thin text-5xl mb-10">Activities</h3>
        <ul class="leading-loose ml-10">
            <li class="font-semibold text-xl list-disc"> Walk-in appointment with Dr. Dunn, D. </li>
            <p class="font-light italic"> Aug 16, 10:30 am</p>
            <p class=""> General healthcare, 15 minutes. </p>
        </ul>
        
    </div>
</div>

@endsection