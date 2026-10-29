@extends('layouts.app')

@section('title', 'Kategori Artikel | TeknoWawasan')

@section('content')
<section class="page-banner">
    <p class="eyebrow">TEMUKAN TOPIK</p>
    <h1>Kategori Artikel</h1>
    <p>Pilih topik teknologi yang ingin kamu pelajari.</p>
</section>

<section class="section">
    <div class="category-grid">
        @foreach ($kategori as $item)
        <div class="category-card">
            <span class="category-icon">✦</span>
            <h2>{{ $item }}</h2>
            <p>Informasi teknologi dalam kategori {{ strtolower($item) }}.</p>
            <a class="text-link" href="{{ route('artikel.index') }}">
                Lihat artikel →
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection