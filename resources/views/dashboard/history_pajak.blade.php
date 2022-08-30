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
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection