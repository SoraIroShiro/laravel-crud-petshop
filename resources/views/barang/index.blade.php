@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Daftar Barang Petshop</h3>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-success" href="{{ route('barang.create') }}">
                <i class="fas fa-plus"></i> Tambah Barang
            </a>
            <a class="btn btn-warning" href="{{ route('home') }}">
                <i class="fas fa-home"></i> Homepage
            </a>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th width="40px">No.</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th width="210px">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->deskripsi }}</td>
                <td>
                    @if($barang->gambar)
                        <img src="{{ asset('storage/' . $barang->gambar) }}" width="60">
                    @else
                        <span class="text-muted">Tidak ada gambar</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{ route('barang.detail', $barang->id)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('barang.edit', $barang->id)}}">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection