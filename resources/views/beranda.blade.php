@extends('layouts.app')

@section('title', 'Beranda | TeknoWawasan')

@section('content')
<section class="hero">
    <div class="hero-text">
        <p class="eyebrow">JELAJAHI DUNIA DIGITAL</p>

        <h1>Wawasan Teknologi untuk Masa Depan</h1>

        <p>
            Baca informasi tentang kecerdasan buatan,
            keamanan digital, pendidikan, dan perkembangan teknologi.
        </p>

        <a class="button" href="{{ route('artikel.index') }}">
            Baca Artikel →
        </a>
    </div>

    <div class="hero-art">
        TECH<br>
        <span>INSIGHT</span>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">PILIHAN REDAKSI</p>
            <h2>Artikel Terbaru</h2>
        </div>

        <a class="text-link" href="{{ route('artikel.index') }}">
            Lihat semua →
        </a>
    </div>

    <div class="cards">
        @foreach ($artikel as $item)
        <article class="card">
            <div class="card-body">
                <span class="tag">{{ $item['kategori'] }}</span>

                <h3>{{ $item['judul'] }}</h3>

                <p>{{ $item['ringkasan'] }}</p>

                <a class="text-link"
                   href="{{ route('artikel.detail', $item['id']) }}">
                    Baca selengkapnya →
                </a>
            </div>
        </article>
        @endforeach
    </div>
</section>
@endsection