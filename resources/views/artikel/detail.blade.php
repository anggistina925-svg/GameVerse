@extends('layouts.app')

@section('title', $artikel['judul'] . ' | TeknoWawasan')

@section('content')
<section class="article-detail">

    <a class="text-link" href="{{ route('artikel.index') }}">
        ← Kembali ke Daftar Artikel
    </a>

    <p class="eyebrow">{{ $artikel['kategori'] }}</p>

    <h1>{{ $artikel['judul'] }}</h1>

    <p class="date">
        Ditulis oleh Tim Artikel Teknologi · {{ $artikel['tanggal'] }}
    </p>

    <div class="content-panel">
        <p class="lead">{{ $artikel['ringkasan'] }}</p>

        <div class="article-copy">
            <p>{{ $artikel['isi'] }}</p>
        </div>
    </div>

</section>
@endsection