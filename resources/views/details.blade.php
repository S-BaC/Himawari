@extends('layouts.baseLayout')

@section('details')

@include('navbar', ['selectedTab' => 'n-details'])

<div class="mx-10">

    @include('detailsNav', ['selectedDetails' => 'd-appointments'])

    <div id="appointment-details" class="mt-6 ml-80">
{{--         
        <h3 class="font-thin text-5xl mb-5">
            Appointments
            <span class="text-lg font-semibold  text-gray-600">
                <div class="add-app px-3 py-2  rounded-lg gap-3 flex my-5">
                    <img class="w-6" src="{{URL::asset('/img/icons/add.svg')}}" alt="">
                    Add Appointments
                </div> 
            </span>
        </h3>
        <ul class="leading-loose ml-10">
            @foreach ($appointments as $app)
                <li class="font-semibold text-xl list-disc flex gap-5 items-end"> 
                    Dr. {{$app['doctor']}} on {{$app['department']}} 
                    <span class="text-base flex gap-3 text-gray-600">
                        <div class="edit-app">
                            <img class="w-6" src="{{URL::asset('/img/icons/edit.svg')}}" alt=""/>
                        </div>
                        <div class="delete-app">
                            <img class="w-6" src="{{URL::asset('/img/icons/delete.svg')}}" alt=""/>
                        </div>
                    </span>
                </li>
                <p class="font-light italic"> 
                    {{$app['date_time']}}, 
                    @if(isset($app['duration_minutes']))
                        Took {{$app['duration_minutes']}} minutes.
                    @else
                        Expected to take {{$app['expected']}} minutes.
                    @endif
                </p>
                <p class="mb-5"> {{$app['description']}} </p>

            @endforeach
        </ul>

        <div class="w-96 m-auto my-10">
            {{$appointments->links()}}
        </div> --}}
        <div id="appointment-form">@include('forms.appointment', ['mode' => 'add'])</div>
    </div>
</div>

<script>
    let content = document.querySelector('#appointment-details');
    document.querySelector('#appointment-details .add-app').addEventListener('click', e => {
        content.innerHTML =  `<div id="appointment-form">@include('forms.appointment', ['mode' => 'add'])</div>`;
    });
    document.querySelector('#appointment-details .edit-app').addEventListener('click', e => {
        content.innerHTML =  `<div id="appointment-form">@include('forms.appointment', ['mode' => 'edit'])</div>`;
    });
    document.querySelector('#appointment-details .delete-app').addEventListener('click', e => {
        content.innerHTML =  `<div id="appointment-form">@include('forms.appointment', ['mode' => 'delete'])</div>`;
    });
</script>

@endsection