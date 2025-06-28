@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Meong Etalase</h3>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-success" href="{{ route('barang.create') }}">
                <i class="fas fa-plus"></i> Add
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
                <th>Jenis Ras Kucing</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th width="210px">Kelola</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->stok }}</td>
                <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
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
                    <a class="btn btn-sm btn-warning" href="{{ route('barang.edit', $barang->id)}}">Update</a>
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