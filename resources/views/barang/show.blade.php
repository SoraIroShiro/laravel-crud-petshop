@php use Illuminate\Support\Str; @endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card petshop-card shadow-sm animate__animated animate__fadeInDown">
                <div class="row no-gutters">
                    <div class="col-md-5 d-flex align-items-center justify-content-center" style="background:#a4deff">
                        @if($barang->gambar)
                            <img src="{{ asset('storage/' . $barang->gambar) }}" class="img-fluid rounded m-3" alt="Gambar Barang" style="max-height:260px;">
                        @else
                            <img src="https://via.placeholder.com/300x200?text=No+Image" class="img-fluid rounded m-3" alt="Tidak ada gambar" style="max-height:260px;">
                        @endif
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title petshop-title">{{ $barang->nama_barang }}</h3>
                            <p class="mb-2"><strong>Stok:</strong> {{ $barang->stok }}</p>
                            <p class="mb-2"><strong>Harga:</strong> Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
                            <p class="mb-3"><strong>Deskripsi:</strong><br>{{ $barang->deskripsi }}</p>
                            <a href="{{ route('home') }}" class="btn btn-primary mb-2 " style= "color: white;font-weight:bold;">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                            @php
                                $wa = '6281234567890'; // Ganti dengan nomor penjual (format 62)
                                $pesan = rawurlencode("Halo, saya ingin membeli barang *{$barang->nama_barang}* di CatLover Petshop.");
                                $wa_link = "https://wa.me/+6289630755146?text={$pesan}";
                            @endphp
                            <a href="{{ $wa_link }}" target="_blank" class="btn  btn-success mb-2" style="color: white;font-weight:bold;">
                                <i class="fab fa-whatsapp"></i> Beli via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Rekomendasi Produk --}}
    @if(isset($rekomendasi) && count($rekomendasi))
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="mb-3 petshop-title">Rekomendasi Produk Lainnya</h4>
        </div>
        @php $idx = 0; @endphp
        @foreach($rekomendasi as $item)
            @if($item->id !== $barang->id)
            <div class="col-md-3 mb-4">
                <div class="card petshop-card h-100 shadow-sm position-relative animate__animated animate__fadeInUp"
                     style="animation-delay: {{ 0.1 + ($idx * 0.12) }}s;">
                    <span class="petshop-badge animate__animated animate__bounceIn"
                          style="animation-delay: {{ 0.15 + ($idx * 0.12) }}s;">
                        <i class="fas fa-box"></i> Stok: {{ $item->stok }}
                    </span>
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="Gambar Barang" style="height:140px;object-fit:cover;border-top-left-radius:16px;border-top-right-radius:16px;">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="Tidak ada gambar" style="height:140px;object-fit:cover;border-top-left-radius:16px;border-top-right-radius:16px;">
                    @endif
                    <div class="card-body">
                        <h6 class="card-title petshop-title">{{ $item->nama_barang }}</h6>
                        <p class="card-text text-muted" style="font-size: 0.9em; min-height: 36px;">
                            {{ Str::limit($item->deskripsi, 40) }}
                        </p>
                        <p class="mb-1"><strong>Harga:</strong> <br>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center">
                        <a href="{{ route('barang.show', $item->id) }}" class="btn petshop-btn btn-sm px-3 animate__animated animate__pulse animate__delay-1s">
                            <i class="fas fa-search"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            @php $idx++; @endphp
            @endif
        @endforeach
    </div>
    @endif
</div>
@endsection