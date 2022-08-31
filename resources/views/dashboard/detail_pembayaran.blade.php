@extends('dashboard.source')
@section('content-source')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-default" href="/dashboard"><i class="fa fa-solid fa-chevron-left"></i> Kembali</a>
                </div>
                <div class="panel-body">
                    <h2 class="text-center"><strong>LAYANAN PAJAK KOTA BANDUNG</strong></h2>
                    <h4 class="text-center">Detail Pembayaran Pajak</h4>
                    <hr>
                    <div class="row" style="padding-left: 200px; margin: 20px 0;">
                        <div class="col-lg-3">Perusahaan</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-3">PT TEN Penerbangan Klasik</div>
                    </div>
                    <div class="row" style="padding-left: 200px; margin: 20px 0;">
                        <div class="col-lg-3">Penanggung Jawab</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-3">Rahman Nurhidayat</div>
                    </div>
                    <div class="row" style="padding-left: 200px; margin: 20px 0;">
                        <div class="col-lg-3">Jenis Pajak</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-3">PBB</div>
                    </div>
                    <div class="row" style="padding-left: 200px; margin: 20px 0;">
                        <div class="col-lg-3">Pembayaran</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-3">Rp. 2.000.000</div>
                    </div>
                    <div class="row" style="padding-left: 200px; margin: 20px 0;">
                        <div class="col-lg-3">Pajak</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-3">Rp. 100.000</div>
                    </div>
                    <div class="row" style="padding-left: 200px; margin: 20px 0;">
                        <div class="col-lg-3">Total</div>
                        <div class="col-lg-1">:</div>
                        <div class="col-lg-3"><strong>Rp. 2.100.000</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection