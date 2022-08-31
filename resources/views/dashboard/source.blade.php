<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Layanan Pajak</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="{{asset('assets/admin/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/plugins/timeline/timeline.css')}}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('assets/admin/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body>
    @yield('content-source')

<!-- Core Scripts - Include with every page -->
    <script src="{{asset('assets/admin/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="{{asset('assets/admin/js/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins/morris/morris.js')}}"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{asset('assets/admin/js/sb-admin.js')}}"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="{{asset('assets/admin/js/demo/dashboard-demo.js')}}"></script>

</body>

</html>