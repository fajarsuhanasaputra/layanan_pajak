@extends('dashboard.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Pembayaran Pajak</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
    <form action="{{ url('pembayaran/'.Auth::user()->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Perusahaan <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="perusahaan"/>
        </div>
        <div class="mb-3">
            <label>Penanggung Jawab <span class="text-danger">*</span></label>
            <input class="form-control" type="text" name="penanggung_jawab" />
        </div>
        <div class="mb-3">
            <label>Jenis Pajak <span class="text-danger">*</span></label>
            <select name="jenis_pajak" class="form-control">
                <option>Pilihan jenis pajak</option>
                <option value="pbb">PBB (Pajak Bumi dan Bangunan)</option>
                <option value="bphtb">BPHTB (Pungutan ata Perolehan Hak Atas Tanah atau Bangunan)</option>
                <option value="hiburan">Pajak Hiburan</option>
                <option value="penerangan">Pajak Penerangan</option>
                <option value="hotel">Pajak Hotel</option>
                <option value="restoran">Pajak Restoran</option>
                <option value="parkir">Pajak Parkir</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Total Pembayaran<span class="text-danger">*</span></label>
            <input class="form-control" type="number" name="pembayaran" />
        </div>
        <div style="margin-top: 20px;">
            <button class="btn btn-primary">Bayar</button>
        </div>
    </form>
    </div>
</div>
@endsection