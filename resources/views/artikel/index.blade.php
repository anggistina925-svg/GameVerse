@extends('layouts.app')

@section('title', 'Daftar Artikel | TeknoWawasan')

@section('content')
<section class="page-banner">
    <p class="eyebrow">BACAAN DIGITAL</p>
    <h1>Daftar Artikel Teknologi</h1>
    <p>Temukan informasi teknologi dari berbagai kategori.</p>
</section>

<section class="section">
    <div class="cards">
        @foreach ($artikel as $item)
        <article class="card">
            <div class="card-body">
                <span class="tag">{{ $item['kategori'] }}</span>
                <p class="date">{{ $item['tanggal'] }}</p>
                <h3>{{ $item['judul'] }}</h3>
                <p>{{ $item['ringkasan'] }}</p>
                <a class="text-link" href="{{ route('artikel.detail', $item['id']) }}">
                    Baca selengkapnya →
                </a>
            </div>
        </article>
        @endforeach
    </div>
</section>
@endsection