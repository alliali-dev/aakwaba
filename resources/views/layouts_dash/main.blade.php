<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="{{asset('assets/img/ico.ico') }}" type="image/x-icon" sizes="196x196">
    <link rel="stylesheet" href="{{asset('assets_dash/css/style.css') }}" />
</head>

<body>

    <!-- Top Bar -->
    @include('layouts_dash.header')
    <!-- Menu Bar -->
    @include('layouts_dash.nav')
    <!-- Workspace -->
    <main class="workspace overflow-hidden">

        <!-- Breadcrumb -->
        @yield('content')

        @include('layouts_dash.footer')

    </main>


    @include('layouts_dash.js')

</body>

</html>