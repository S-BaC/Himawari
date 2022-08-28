@extends('layouts.baseLayout')

@section('employees')
    @include('navbar', ['selectedTab' => 'n-details'])

    <div class="mx-10">

        @include('detailsNav', ['selectedDetails' => 'd-employees'])

        <div id="employee-details" class="mt-20 mx-2 md:mt-6 md:ml-80">

            @if($data['picture'] === null)
                <img class="w-80 mb-5" src="{{URL::asset('/storage/dummy_profile.jpg')}}" alt="">
            @else
                <img class="w-80 mb-5" src="{{URL::asset('/storage/' . $data['folder_path'] . '/' . $data['picture'])}}" alt="">
            @endif

            <h3 class="font-thin text-5xl mb-10 flex items-end gap-5">
                {{ $data['name'] }}
            </h3>

        </div>

        <div id="employee-form" class="hidden ml-80 mt-3">@include('forms.employee', ['mode' => 'add'])</div>

    </div>
@endsection
