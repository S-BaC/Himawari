@extends('layouts.baseLayout')

@section('details')

@include('navbar', ['selectedTab' => 'n-details'])

<div class="mx-10">

    @include('detailsNav', ['selectedDetails' => 'd-finances'])

    <div class="text-5xl font-thin mt-20 mx-2 md:mt-6 md:ml-80 md:w-2/3 text-center pt-20">
        {{__('Under Development')}}
    </div>
</div>

@endsection