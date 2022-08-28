
@extends('layouts.baseLayout')

@section('details')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10 mt-24 lg:mt-6 lg:ml-80">

        @include('detailsNav', ['selectedDetails' => 'd-employees'])
        
        <form class="w-2/3 m-auto" method="POST" action="/employees/add" enctype="multipart/form-data">

          @csrf
        
            @include('forms.employeeBase', ['employee' => ['name' => '', 'phone' => '', 'email' => '']])
        </form>


    </div>
    @endsection



