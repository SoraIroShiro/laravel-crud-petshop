@extends('layouts.app')
@section('content')

<div class="container">
    <div class="form-row">
        <div class="col-lg-12">
            <h3>Edit Barang Petshop</h3>
        </div>
    </div>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada permasalahan inputanmu.<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.update', $barang->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="number" name="stok" class="form-control" id="stok" value="{{ $barang->stok }}" min="0" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4">{{ $barang->deskripsi }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" name="gambar" id="gambar" class="form-control-file">
                @if($barang->gambar)
                    <img src="{{ asset('storage/' . $barang->gambar) }}" width="80" class="mt-2">
                @endif
                <p class="text-danger">{{ $errors->first('gambar') }}</p>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <a href="{{ route('barang.index') }}" class="btn btn-success">Kembali</a>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>

@endsection