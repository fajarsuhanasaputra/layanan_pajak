@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div>
<div class="row">
    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
    @endif
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Total Riwayat Pembayaran
            </div>
            <div class="panel-body text-center">
                <h3 class="h1">5</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Jenis Pajak A
            </div>
            <div class="panel-body text-center">
                <h3 class="h1">2</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Jenis Pajak B
            </div>
            <div class="panel-body text-center">
                <h3 class="h1">3</h3>
            </div>
        </div>
    </div>
</div>
@endsection