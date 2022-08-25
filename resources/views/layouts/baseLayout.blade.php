<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Himawari ByouIn</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('loginForm')
    @yield('dashboard')
    @yield('details')
    @yield('employees')
    @yield('employees_edit')
    @yield('services')
    @yield('finances')
    @yield('settings')
    <script src="{{URL::asset('modules/flowbite/dist/flowbite.js')}}"></script>
    <script src="{{URL::asset('modules/flowbite/dist/datepicker.js')}}"></script>
</body>
</html>