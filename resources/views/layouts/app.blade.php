<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plant System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    @if(auth()->check())

        @if(auth()->user()->role === 'admin')
            @include('components.navbar-admin')
        @else
            @include('components.navbar-user')
        @endif

    @else
        @include('components.navbar-guest')
    @endif

    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>