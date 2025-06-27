@extends('layouts.app')
@section('content')

<div class="container">
    <div class="form-row">
        <div class="col-lg-12">
            <h3>Detail Barang Petshop</h3>
        </div>
    </div>
    <br>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            {{ $barang->nama_barang }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-10">
            {{ $barang->stok }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            {{ $barang->deskripsi }}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            @if($barang->gambar)
                <img src="{{ asset('storage/' . $barang->gambar) }}" width="120">
            @else
                <span class="text-muted">Tidak ada gambar</span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <a href="{{ route('barang.index') }}" class="btn btn-success">Kembali</a>
        </div>
    </div>
</div>

@endsection