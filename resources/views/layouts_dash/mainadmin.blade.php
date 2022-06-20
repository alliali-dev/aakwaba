<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('assets2/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset ('assets2/vendors/jsgrid/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/jsgrid/jsgrid-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets2/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/image/ico.ico') }}" />
</head>

<body class="sidebar-light">

    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            @include('layouts1.header')

            @include('layouts1.navadmin')


            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    @include('layouts1.footer')
    <!-- base:js -->
    <script src="{{asset('assets2/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('assets2/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- Plugin js for this page-->

    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('assets2/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets2/js/hoverable-collapse.js') }}"></script>
    <script src="{{asset('assets2/js/template.js')}}"></script>
    <script src="{{asset('assets2/js/settings.js')}}"></script>
    <script src="{{asset('assets2/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('assets2/vendors/jsgrid/jsgrid.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets2/js/dashboard.js') }}"></script>
    <script src="{{asset('assets2/js/modal-demo.js') }}"></script>
    <!-- End custom js for this page-->
    <!-- plugin js for this page -->
    <script src="{{ asset('assets2/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets2/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets2/js/iCheck.js') }}"></script>
    <script src="{{ asset('assets2/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets2/js/select2.js') }}"></script>
    <script src="{{ asset('assets2/js/moment.min.js') }}"></script>
    @yield('js')
</body>

</html>
