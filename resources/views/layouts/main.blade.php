<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    @include('layouts.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('layouts.footer')
    <!-- Footer Section End -->

    <!-- Optional JavaScript -->
    @include('layouts.js')


</body>

</html>