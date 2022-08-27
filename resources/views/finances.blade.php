@extends('layouts.baseLayout')

@section('details')

@include('navbar', ['selectedTab' => 'n-details'])

<div class="mx-10">

    @include('detailsNav', ['selectedDetails' => 'd-finances'])

    <div class="text-5xl font-thin ml-80 w-2/3 text-center pt-20">
        {{__('Under Development')}}
    </div>
</div>

@endsection