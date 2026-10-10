<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GameVerse - Dunia Game Favoritmu</title>

    <style>
        
/* EFEK GAMING NEON */
body {
    background:
        radial-gradient(ellipse at top, #19143b 0%, #0b0b1e 55%);
}

.navbar {
    backdrop-filter: blur(16px);
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
}

.logo {
    text-shadow: 0 0 15px rgba(167, 139, 250, 0.65);
}

.kartu {
    position: relative;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.kartu:hover {
    box-shadow: 0 12px 35px rgba(124, 58, 237, 0.22);
}

.tombol-detail,
.tombol-favorit,
.tombol-atas,
.tombol-tutup {
    cursor: pointer;
    font-family: inherit;
    transition: 0.25s ease;
}

.aksi-kartu {
    display: flex;
    gap: 10px;
    margin-top: 18px;
}

.tombol-detail {
    flex: 1;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(135deg, #7c3aed, #4f46e5);
    color: white;
    font-weight: bold;
}

.tombol-detail:hover {
    filter: brightness(1.2);
    transform: translateY(-2px);
}

.tombol-favorit {
    min-width: 43px;
    padding: 8px;
    border: 1px solid #49416d;
    border-radius: 8px;
    background: #22203d;
    color: white;
    font-size: 18px;
}

.tombol-favorit.aktif {
    background: #55213d;
    border-color: #fb7185;
}

.kartu h3 {
    color: #f3f0ff;
}

/* JENDELA DETAIL GAME */
.modal-game {
    position: fixed;
    inset: 0;
    z-index: 1000;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(3, 3, 15, 0.82);
    backdrop-filter: blur(8px);
}

.modal-game.terbuka {
    display: flex;
}

.isi-modal {
    position: relative;
    width: 100%;
    max-width: 480px;
    max-height: 85vh;
    overflow-y: auto;
    padding: 28px;
    background: #17152f;
    border: 1px solid #7655c9;
    border-radius: 18px;
    box-shadow: 0 0 40px rgba(124, 58, 237, 0.25);
    animation: muncul 0.25s ease;
}

@keyframes muncul {
    from {
        opacity: 0;
        transform: translateY(15px) scale(0.97);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.gambar-modal {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 12px;
    margin: 15px 0;
}

.tombol-tutup {
    position: absolute;
    top: 12px;
    right: 15px;
    border: none;
    background: transparent;
    color: white;
    font-size: 28px;
}

.isi-modal p {
    color: #c4c4d8;
    margin-top: 12px;
}

.modal-label {
    color: #c4b5fd;
    font-size: 13px;
    font-weight: bold;
}

.tombol-atas {
    position: fixed;
    right: 22px;
    bottom: 22px;
    z-index: 90;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    background: #7c3aed;
    color: white;
    font-size: 22px;
    box-shadow: 0 0 20px rgba(124, 58, 237, 0.4);
}

.tombol-atas:hover {
    background: #9f67ff;
    transform: translateY(-3px);
}

@media (max-width: 600px) {
    .aksi-kartu {
        gap: 8px;
    }

    .isi-modal {
        padding: 22px;
    }

    .gambar-modal {
        height: 180px;
    }
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0b1e;
            color: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 8%;
            background: rgba(11, 11, 30, 0.96);
            border-bottom: 1px solid #29244d;
        }

        .logo {
            color: #a78bfa;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .menu {
            display: flex;
            gap: 28px;
        }

        .menu a {
            color: #e5e7eb;
            transition: color 0.3s;
        }

        .menu a:hover {
            color: #a78bfa;
        }

        /* BANNER */
        .banner {
            padding: 85px 8%;
            background:
                radial-gradient(
                    circle at 80% 40%,
                    rgba(124, 58, 237, 0.25),
                    transparent 40%
                ),
                linear-gradient(135deg, #11112d, #171033);
        }

        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 45px;
            max-width: 1200px;
            margin: auto;
        }

        .hero-text {
            flex: 1;
        }

        .subjudul {
            color: #a78bfa;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 18px;
        }

        .hero-text h1 {
            font-size: clamp(35px, 5vw, 58px);
            line-height: 1.2;
            margin-bottom: 22px;
        }

        .hero-text h1 span {
            color: #a78bfa;
        }

        .deskripsi {
            max-width: 520px;
            color: #c4c4d8;
            margin-bottom: 30px;
        }

        .tombol-banner {
            display: inline-block;
            padding: 13px 25px;
            background: #7c3aed;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .tombol-banner:hover {
            background: #6d28d9;
            transform: translateY(-2px);
        }

        /* GAMBAR ILUSTRASI BANNER */
        .hero-image {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            max-width: 460px;
            transform: rotate(2deg);
        }

        .hero-image img {
            display: block;
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 14px;
            border: 1px solid #6550a8;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-image img:first-child {
            grid-row: span 2;
            height: 394px;
        }

        /* BAGIAN DAFTAR GAME */
        .konten {
            max-width: 1200px;
            margin: auto;
            padding: 65px 25px;
        }

        .judul-bagian {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .teks-bagian {
            color: #aaaac4;
            margin-bottom: 28px;
        }

        /* PENCARIAN DAN FILTER */
        .kontrol {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .kontrol input,
        .kontrol select {
            min-width: 0;
            padding: 13px 15px;
            background: #17172f;
            border: 1px solid #39345f;
            border-radius: 8px;
            color: white;
            font-size: 15px;
            outline: none;
        }

        .kontrol input {
            flex: 2;
        }

        .kontrol select {
            flex: 1;
        }

        .kontrol input:focus,
        .kontrol select:focus {
            border-color: #a78bfa;
        }

        /* KARTU GAME */
        .daftar-game {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .kartu {
            padding: 17px;
            background: #15152c;
            border: 1px solid #29294a;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.3s, border-color 0.3s;
        }

        .kartu:hover {
            transform: translateY(-6px);
            border-color: #8b5cf6;
        }

        .gambar-game {
            width: 100%;
            height: 180px;
            overflow: hidden;
            border-radius: 9px;
            margin-bottom: 15px;
        }

        .gambar-game img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .kartu:hover .gambar-game img {
            transform: scale(1.05);
        }

        .kartu h3 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .kategori {
            display: inline-block;
            padding: 4px 10px;
            background: #302154;
            color: #c4b5fd;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .kartu p {
            color: #b7b7ce;
            font-size: 14px;
        }

        #pesanKosong {
            margin-top: 25px;
            color: #c4b5fd;
        }

        /* TENTANG */
        .tentang {
            max-width: none;
            padding: 65px 8%;
            text-align: center;
            background: #121229;
        }

        .tentang p {
            max-width: 700px;
            margin: 15px auto 0;
            color: #c4c4d8;
        }

        /* FOOTER */
        footer {
            padding: 25px 15px;
            text-align: center;
            color: #aaaac4;
            background: #080817;
            border-top: 1px solid #29244d;
            font-size: 14px;
        }

        /* TAMPILAN TABLET */
        @media (max-width: 850px) {
            .banner {
                padding: 60px 6%;
            }

            .hero {
                gap: 25px;
            }

            .hero-image img {
                height: 145px;
            }

            .hero-image img:first-child {
                height: 304px;
            }

            .daftar-game {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        /* TAMPILAN HP */
        @media (max-width: 600px) {
            .navbar {
                padding: 15px 5%;
                flex-wrap: wrap;
                gap: 12px;
            }

            .logo {
                font-size: 21px;
            }

            .menu {
                gap: 15px;
                font-size: 13px;
            }

            .banner {
                padding: 45px 6%;
            }

            .hero {
                flex-direction: column;
                align-items: stretch;
            }

            .hero-text h1 {
                font-size: 38px;
            }

            .hero-image {
                max-width: 100%;
            }

            .hero-image img {
                height: 130px;
            }

            .hero-image img:first-child {
                height: 274px;
            }

            .konten {
                padding: 45px 18px;
            }

            .judul-bagian {
                font-size: 27px;
            }

            .kontrol {
                flex-direction: column;
            }

            .kontrol input,
            .kontrol select {
                width: 100%;
            }

            .daftar-game {
                grid-template-columns: 1fr;
            }

            .gambar-game {
                height: 210px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="#beranda" class="logo">GAMEVERSE</a>

        <div class="menu">
            <a href="#beranda">Beranda</a>
            <a href="#game">Daftar Game</a>
            <a href="#tentang">Tentang</a>
        </div>
    </nav>

    <!-- BANNER UTAMA -->
    <section class="banner" id="beranda">
        <div class="hero">

            <div class="hero-text">
                <p class="subjudul">WELCOME TO GAMEVERSE</p>

                <h1>
                    Temukan Dunia<br>
                    <span>Game Favoritmu!</span>
                </h1>

                <p class="deskripsi">
                    Jelajahi berbagai game favoritmu dan
                    temukan petualangan baru di GameVerse.
                </p>

                <a href="#game" class="tombol-banner">
                    Jelajahi Game →
                </a>
            </div>

            <!-- Ilustrasi memakai gambar dari folder images -->
            <div class="hero-image">
                <img src="{{ asset('images/free-fire.jpg') }}"
                     alt="Game Free Fire">

                <img src="{{ asset('images/genshin-impact.jpg') }}"
                     alt="Game Genshin Impact">

                <img src="{{ asset('images/valorant.jpg') }}"
                     alt="Game VALORANT">
            </div>

        </div>
    </section>

    <!-- DAFTAR GAME -->
    <section class="konten" id="game">
        <h2 class="judul-bagian">🎮 Daftar Game</h2>

        <p class="teks-bagian">
            Temukan game favoritmu di sini.
        </p>

        <!-- PENCARIAN DAN FILTER -->
        <div class="kontrol">
            <input
                type="text"
                id="cari"
                placeholder="Cari nama game..."
                aria-label="Cari nama game"
            >

            <select id="filter" aria-label="Filter kategori">
                <option value="semua">Semua kategori</option>
                <option value="battle royale">Battle Royale</option>
                <option value="rpg">RPG</option>
                <option value="sandbox">Sandbox</option>
                <option value="moba">MOBA</option>
                <option value="fps">FPS</option>
            </select>
        </div>

        <div class="daftar-game" id="daftarGame">

            <article class="kartu"
                     data-nama="Free Fire"
                     data-kategori="battle royale">

                <div class="gambar-game">
                    <img src="{{ asset('images/free-fire.jpg') }}"
                         alt="Free Fire">
                </div>

                <h3>Free Fire</h3>
                <span class="kategori">BATTLE ROYALE</span>
                <p>Bertahan dan jadilah pemenang di arena pertempuran.</p>
            </article>

            <article class="kartu"
                     data-nama="Genshin Impact"
                     data-kategori="rpg">

                <div class="gambar-game">
                    <img src="{{ asset('images/genshin-impact.jpg') }}"
                         alt="Genshin Impact">
                </div>

                <h3>Genshin Impact</h3>
                <span class="kategori">RPG</span>
                <p>Jelajahi dunia fantasi dengan petualangan menarik.</p>
            </article>

            <article class="kartu"
                     data-nama="Minecraft"
                     data-kategori="sandbox">

                <div class="gambar-game">
                    <img src="{{ asset('images/minecraft.jpg') }}"
                         alt="Minecraft">
                </div>

                <h3>Minecraft</h3>
                <span class="kategori">SANDBOX</span>
                <p>Bangun dunia impian dan berkreasi tanpa batas.</p>
            </article>

            <article class="kartu"
                     data-nama="Mobile Legends"
                     data-kategori="moba">

                
<div class="gambar-game">
    <img src="{{ asset('images/mobile-legend.jpg') }}"
         alt="Mobile Legends">
</div>


                <h3>Mobile Legends</h3>
                <span class="kategori">MOBA</span>
                <p>Bekerja sama dengan tim untuk memenangkan pertandingan.</p>
            </article>

            <article class="kartu"
                     data-nama="PUBG Mobile"
                     data-kategori="battle royale">

                <div class="gambar-game">
                    <img src="{{ asset('images/pubg-mobile.jpg') }}"
                         alt="PUBG Mobile">
                </div>

                <h3>PUBG Mobile</h3>
                <span class="kategori">BATTLE ROYALE</span>
                <p>Gunakan strategi untuk bertahan di medan permainan.</p>
            </article>

            <article class="kartu"
                     data-nama="VALORANT"
                     data-kategori="fps">

                <div class="gambar-game">
                    <img src="{{ asset('images/valorant.jpg') }}"
                         alt="VALORANT">
                </div>

                <h3>VALORANT</h3>
                <span class="kategori">FPS</span>
                <p>Uji strategi dan ketepatan dalam permainan taktis.</p>
            </article>

        </div>

        <p id="pesanKosong" style="display: none;">
            Game tidak ditemukan.
        </p>
    </section>

    <!-- TENTANG GAMEVERSE -->
    <section class="konten tentang" id="tentang">
        <h2 class="judul-bagian">Tentang GameVerse</h2>

        <p>
            GameVerse adalah tempat untuk menemukan berbagai game
            favorit dengan tampilan modern bernuansa ungu neon dan biru.
            Jelajahi daftar game dan temukan permainan yang kamu sukai.
        </p>
    </section>

    <!-- FOOTER -->
    <footer>
        © {{ date('Y') }} GameVerse — Dunia Game Favoritmu
    </footer>

    
<!-- JAVASCRIPT GAMEVERSE -->
<script>
    const cari = document.getElementById('cari');
    const filter = document.getElementById('filter');
    const kartu = document.querySelectorAll('.kartu');
    const pesan = document.getElementById('pesanKosong');

    // PENCARIAN DAN FILTER GAME
    function tampilkanGame() {
        let jumlah = 0;

        const kata = cari.value.toLowerCase().trim();
        const kategori = filter.value;

        kartu.forEach(function(game) {
            const nama = game.dataset.nama.toLowerCase();

            const namaCocok = nama.includes(kata);
            const kategoriCocok =
                kategori === 'semua' ||
                game.dataset.kategori === kategori;

            const tampil = namaCocok && kategoriCocok;

            game.style.display = tampil ? '' : 'none';

            if (tampil) jumlah++;
        });

        pesan.style.display = jumlah === 0 ? 'block' : 'none';
    }

    cari.addEventListener('input', tampilkanGame);
    filter.addEventListener('change', tampilkanGame);

    // TOMBOL DETAIL DAN FAVORIT
    const alamatGame = {
        'Free Fire': 'free-fire',
        'Genshin Impact': 'genshin-impact',
        'Minecraft': 'minecraft',
        'Mobile Legends': 'mobile-legends',
        'PUBG Mobile': 'pubg-mobile',
        'VALORANT': 'valorant'
    };

    kartu.forEach(function(game) {
        const aksi = document.createElement('div');
        aksi.className = 'aksi-kartu';

        const detail = document.createElement('button');
        detail.type = 'button';
        detail.className = 'tombol-detail';
        detail.textContent = 'Lihat Detail';

        detail.addEventListener('click', function() {
            const slug = alamatGame[game.dataset.nama];

            if (slug) {
                window.location.href = '/game/' + slug;
            }
        });

        const favorit = document.createElement('button');
        favorit.type = 'button';
        favorit.className = 'tombol-favorit';
        favorit.textContent = '♡';
        favorit.title = 'Tambahkan ke favorit';

        favorit.addEventListener('click', function() {
            const aktif = favorit.classList.toggle('aktif');

            favorit.textContent = aktif ? '♥' : '♡';
            favorit.title = aktif
                ? 'Hapus dari favorit'
                : 'Tambahkan ke favorit';
        });

        aksi.appendChild(detail);
        aksi.appendChild(favorit);
        game.appendChild(aksi);
    });

    // TOMBOL KEMBALI KE ATAS
    const tombolAtas = document.createElement('button');
    tombolAtas.type = 'button';
    tombolAtas.className = 'tombol-atas';
    tombolAtas.textContent = '↑';
    tombolAtas.title = 'Kembali ke atas';

    tombolAtas.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    document.body.appendChild(tombolAtas);
</script>