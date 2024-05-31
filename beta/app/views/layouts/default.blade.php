<!DOCTYPE html>
<html>

<head>
    <title>C4K60 - @yield('title')</title>
    @include('includes.head')
</head>

<body>
    @include('includes.menu')
    <div id="screen">
        @yield('content')
    </div>
    @include('includes.navbar')
    <script src="/assets/js/script.js"></script>
</body>

</html>
