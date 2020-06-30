<!DOCTYPE html>
<html lang="en">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<head>
    <title>@yield('title')</title>

    @include('includes.css')
</head>

<body>
    @yield('content')


    @include('includes.script')
</body>

</html>