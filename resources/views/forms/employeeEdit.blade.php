@extends('layouts.baseLayout')

@section('details')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10 mt-6 ml-80">

        @include('detailsNav', ['selectedDetails' => 'd-employees'])

<form class="w-2/3 m-auto" method="POST" action="/employees/update/{{$id}}">

  @csrf
    @include('forms.employeeBase', ['employee' => $employee])
</form>


    </div>
    @endsection