

<form class="w-2/3 m-auto" method="POST" action="/employees/add" enctype="multipart/form-data">

  @csrf

    @include('forms.employeeBase', ['employee' => ['name' => '', 'phone' => '', 'email' => '']])
</form>


