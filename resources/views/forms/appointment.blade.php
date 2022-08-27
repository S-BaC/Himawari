<form class="w-2/3 m-auto" method="POST" action="/details/add">
  
    @csrf
    @include('forms.appointmentBase', ['appointment' => ['doctor' => '', 'patient' => '', 'department' => '', 'duration_minutes' => '', 'expected_minutes' => '', 'description' => '']]);
  </form>
  