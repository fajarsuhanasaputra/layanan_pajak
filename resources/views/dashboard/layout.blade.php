@extends('dashboard.source')
@section('content-source')
<div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Dashboard Layanan Pajak Kota Bandung</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    @if(Auth::user()->role === "user")
                    <li>
                        <a href="{{url('profile/'.Auth::user()->id)}}"><i class="fa fa-solid fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="{{url('riwayat-pajak/'.Auth::user()->id)}}"><i class="fa fa-solid fa-book"></i> Riwayat Pajak</a>
                    </li>
                    <li>
                        <a href="{{route('pembayaran')}}"><i class="fa fa-solid fa-credit-card"></i> Pembayaran</a>
                    </li>
                    @endif
                    @if(Auth::user()->role === "admin")
                    <li>
                        <a href="{{route('manajemen_pembayaran')}}"><i class="fa fa-solid fa-credit-card"></i> Manajemen Pembayaran</a>
                    </li>
                    @endif
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@endsection
