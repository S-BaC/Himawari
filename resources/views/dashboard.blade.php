@extends('layouts.baseLayout')

@section('dashboard')
@include('navbar', ['selectedTab' => 'n-dashboard'])

<div class="dashboard mx-10">
    @include('graphs')
    {{-- {{$data['totalRooms']}} --}}
    @include('stats')
</div>

@endsection