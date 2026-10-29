<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TeknoWawasan')</title>

    <link rel="stylesheet" href="{{ asset('css/teknologi.css') }}">
</head>
<body>

    <header class="navbar">
        <a class="brand" href="{{ route('beranda') }}">
            Tekno<span>Wawasan</span>
        </a>

        <nav>
            <a href="{{ route('beranda') }}">Beranda</a>
            <a href="{{ route('artikel.index') }}">Artikel</a>
            <a href="{{ route('artikel.kategori') }}">Kategori</a>
            <a href="{{ route('penulis') }}">Profil Penulis</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p>© 2026 TeknoWawasan — Informasi Teknologi untuk Semua.</p>
    </footer>

</body>
</html>