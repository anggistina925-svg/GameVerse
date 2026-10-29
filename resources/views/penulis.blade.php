@extends('layouts.app')

@section('title', 'Profil Penulis | TeknoWawasan')

@section('content')
<section class="page-banner">
    <p class="eyebrow">TENTANG KAMI</p>
    <h1>Profil Penulis</h1>
    <p>Mengenal tujuan website TeknoWawasan.</p>
</section>

<section class="content-panel narrow">
    <div class="avatar">TW</div>

    <h2>Tim Artikel Teknologi</h2>

    <p>
        TeknoWawasan adalah website informasi edukatif yang membahas
        perkembangan teknologi dengan bahasa yang sederhana dan mudah dipahami.
    </p>

    <p>
        Tujuan kami adalah membantu pembaca mengenal teknologi,
        memahami manfaatnya, serta menggunakannya secara aman
        dan bertanggung jawab.
    </p>

    <a class="button" href="{{ route('artikel.index') }}">
        Jelajahi Artikel
    </a>
</section>
@endsection