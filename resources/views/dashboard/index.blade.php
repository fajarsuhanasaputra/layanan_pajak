@extends('dashboard.layout')
@section('content')
<div class="row">
    @if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard Pelayanan Pajak</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    Histori Pajak
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$jenis_pajak}}</h3>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    PBB
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$pbb}}</h3>
                    </p>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Hotel
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$hotel}}</h3>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    BPHTB
                </div>
                <div class="panel-body">
                    <h3 class="text-center">{{$bphtb}}</h3>
                    </p>
                </div>
            </div>
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Parkir
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$parkir}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Hiburan
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$hiburan}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Penerangan
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$penerangan}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    Restoran
                </div>
                <div class="panel-body">
                    <h3 class="h1 text-center">{{$restoran}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection