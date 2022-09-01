@extends('dashboard.source')
@section('content-source')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="display: flex; align-items: center; justify-content: space-between;">
                    <a type="button" class="btn btn-default" href="/dashboard"><i class="fa fa-solid fa-chevron-left"></i> Kembali</a>
                    <button type="button" onclick="window.print();" href="/counts" class="btn btn-primary mb-4 px-4">
                        Print
                    </button>
                </div>
                <div class="panel-body">
                    <h2 class="text-center"><strong>LAYANAN PAJAK KOTA BANDUNG</strong></h2>
                    <h4 class="text-center">Detail Pembayaran Pajak</h4>
                    <hr>
                    <table class="table" style="display: flex; justify-content: center;">
                        <tr>
                            <th style="border: none; width: 200px;">Perusahaan</th>
                            <td style="border: none; width: 10px;">:</td>
                            <td style="border: none;">{{$pajak->perusahaan}}</td>
                        </tr>
                        <td style="border: none;"></td>
                        <tr>
                            <th style="border: none;">Penanggung Jawab</th>
                            <td style="border: none;">:</td>
                            <td style="border: none;">{{$pajak->penanggung_jawab}}</td>
                        </tr>
                        <tr>
                            <th style="border: none;">Jenis Pajak</th>
                            <td style="border: none;">:</td>
                            <td style="border: none;">{{strtoupper($pajak->jenis_pajak)}}</td>
                        </tr>
                        <tr>
                            <th style="border: none;">Pembayaran</th>
                            <td style="border: none;">:</td>
                            <td style="border: none;">Rp. {{$pajak->pembayaran}}</td>
                        </tr>
                        <tr>
                            <th style="border: none;">Pajak</th>
                            <td style="border: none;">:</td>
                            <td style="border: none;">Rp. {{$pajak->pembayaran * (5 / 100)}}</td>
                        </tr>
                        <tr>
                            <th style="border: none;">Total</th>
                            <td style="border: none;">:</td>
                            <td style="border: none;">Rp. {{$pajak->total_pembayaran}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection