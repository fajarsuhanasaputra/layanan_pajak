@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manajemen Pembayaran Pajak</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Data tabel riwayat pembayaran pajak {{Auth::user()->name}}
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Penanggung Jawab</th>
                            <th>Jenis Pajak</th>
                            <th>Pembayaran</th>
                            <th>Total Pembayaran</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($pajaks && count($pajaks) > 0)
                            @foreach ($pajaks as $key => $pajak)
                            <tr>
                                <td>{{$pajak->perusahaan}}</td>
                                <td>{{$pajak->penanggung_jawab}}</td>
                                <td>{{strtoupper($pajak->jenis_pajak)}}</td>
                                <td>Rp. {{$pajak->pembayaran}}</td>
                                <td>Rp. {{$pajak->total_pembayaran}}</td>
                                <td>{{$pajak->created_at}}</td>
                                <td>
                                    <button disabled class="btn btn-sm {{($pajak->status === 'checking') ? 'btn-primary' : (($pajak->status === 'approved') ? 'btn-success' : 'btn-danger')}}">{{$pajak->status}}</button>
                                </td>
                                <td>
                                <a class="btn btn-sm btn-info" href="{{url('pajak/'.$pajak->id)}}" class="btn btn-outline-secondary">Detail</a>
                                    <a class="btn btn-default" href="{{url('view?image_url='.$pajak->bukti_pembayaran)}}" class="btn btn-outline-secondary">Lihat</a>
                                </td>
                                @if($pajak->status === "checking")
                                <td>
                                    <form action="{{url('pajak/approved/'.$pajak->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Approve</button>
                                    </form>
                                    <form action="{{url('pajak/rejected/'.$pajak->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger">Rejected</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        @else
                            <div class="alert alert-info" role="alert">
                            Belum ada riwayat pembayaran
                            </div>
                        @endif
                    </tbody>
                </table>
                {{$pajaks->links()}}
            </div>
        </div>
    </div>
    </div>
</div>

@endsection