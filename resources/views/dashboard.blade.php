@extends('layouts.baseLayout')

@section('dashboard')

<div class="dashboard mx-10">
    @include('navbar')
    @include('graphs')
    @include('stats')

</div>

@endsection