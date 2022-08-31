@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Riwayat Pembayaran Pajak</h1>
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
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($pajaks) === 0)
                        <div class="alert alert-info" role="alert">
                        Belum ada riwayat pembayaran
                        </div>
                        @else
                            @foreach ($pajaks as $key => $pajak)
                            <tr>
                                <td>{{$pajak->perusahaan}}</td>
                                <td>{{$pajak->penanggung_jawab}}</td>
                                <td>{{$pajak->jenis_pajak}}</td>
                                <td>{{$pajak->total_pembayaran}}</td>
                                <td>{{$pajak->verifikasi}}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary">detail</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection