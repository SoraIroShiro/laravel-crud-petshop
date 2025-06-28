@php use Illuminate\Support\Str; @endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4 petshop-title animate__animated animate__fadeInDown text-center" style="">Etalase Petshop</h3>
    @if(isset($barangs) && count($barangs))
        <div class="row">
            @foreach($barangs as $i => $barang)
                <div class="col-md-4 mb-4">
                    <div class="card petshop-card h-100 shadow-sm position-relative animate__animated animate__fadeInUp"
                         style="animation-delay: {{ 0.1 + ($i * 0.12) }}s;">
                        <span class="petshop-badge animate__animated animate__bounceIn"
                              style="animation-delay: {{ 0.15 + ($i * 0.12) }}s;">
                            <i class="fas fa-box"></i> Stok: {{ $barang->stok }}
                        </span>
                        @if($barang->gambar)
                            <img src="{{ asset('storage/' . $barang->gambar) }}" class="card-img-top" alt="Gambar Barang" style="height:200px;object-fit:cover;border-top-left-radius:16px;border-top-right-radius:16px;">
                        @else
                            <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="Tidak ada gambar" style="height:200px;object-fit:cover;border-top-left-radius:16px;border-top-right-radius:16px;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title petshop-title">{{ $barang->nama_barang }}</h5>
                            <p class="card-text text-muted" style="font-size: 0.95em; min-height: 48px;">
                                {{ Str::limit($barang->deskripsi, 80) }}
                            </p>
                            <p class="mb-1"><strong>Harga:</strong> Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <a href="{{ route('barang.show', $barang->id) }}" class="btn petshop-btn px-4 animate__animated animate__pulse animate__delay-1s">
                                <i class="fas fa-search"></i> Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">Belum ada data barang.</p>
    @endif
</div>
@endsection