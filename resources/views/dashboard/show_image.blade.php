@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Bukti Pembayaran</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="dashboard" class="btn btn-default">Kembali</a>
            </div>
            <div class="panel-body">
                <img src="{{asset('storage/'.$image_url)}}" alt="{{$image_url}}">
            </div>
        </div>
    </div>
</div>
@endsection