<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>
    @yield('content')
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/39f24fdfe8.js" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>
