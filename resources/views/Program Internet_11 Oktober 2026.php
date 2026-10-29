<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Game | GameVerse</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0b0b1e;
            color: white;
            min-height: 100vh;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background: #11112a;
            border-bottom: 1px solid #30244f;
        }

        .logo {
            color: #a78bfa;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .menu {
            display: flex;
            gap: 22px;
        }

        .menu a {
            color: #ddd6fe;
            text-decoration: none;
        }

        .menu a:hover {
            color: white;
        }

        .detail-container {
            max-width: 1050px;
            margin: 60px auto;
            padding: 25px;
        }

        .detail-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
            padding: 30px;
            background: #17152f;
            border: 1px solid #39305f;
            border-radius: 20px;
            box-shadow: 0 15px 45px #0005;
        }

        .detail-card img {
            width: 100%;
            min-height: 280px;
            max-height: 400px;
            object-fit: cover;
            border-radius: 14px;
        }

        .label {
            display: inline-block;
            color: #c4b5fd;
            background: #302154;
            padding: 6px 13px;
            border-radius: 30px;
            font-size: 12px;
            margin-bottom: 15px;
        }

        h1 {
            font-size: clamp(30px, 4vw, 44px);
            margin-bottom: 15px;
        }

        .deskripsi {
            color: #c4c4d8;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .tombol {
            display: inline-block;
            padding: 12px 20px;
            background: #7c3aed;
            color: white;
            border-radius: 9px;
            text-decoration: none;
            margin: 0 8px 10px 0;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .tombol:hover {
            background: #6d28d9;
        }

        .tombol-kembali {
            background: #292544;
            border: 1px solid #49416d;
        }

        .tombol-kembali:hover {
            background: #39305f;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #aaaac4;
            background: #080817;
            margin-top: 50px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 18px 5%;
                flex-wrap: wrap;
                gap: 12px;
            }

            .menu {
                gap: 13px;
                font-size: 13px;
            }

            .detail-container {
                margin: 25px auto;
                padding: 15px;
            }

            .detail-card {
                grid-template-columns: 1fr;
                padding: 20px;
                gap: 22px;
            }

            .detail-card img {
                min-height: 180px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="{{ url('/') }}#beranda" class="logo">
            GAMEVERSE
        </a>

        <div class="menu">
            <a href="{{ url('/') }}#beranda">Beranda</a>
            <a href="{{ url('/') }}#game">Daftar Game</a>
            <a href="{{ url('/') }}#tentang">Tentang</a>
        </div>
    </nav>

    <main class="detail-container">
        <div class="detail-card">

            <img
                src="{{ asset('images/' . $game['gambar']) }}"
                alt="{{ $game['nama'] }}"
            >

            <div>
                <span class="label">{{ $game['kategori'] }}</span>

                <h1>{{ $game['nama'] }}</h1>
                 
                                <p class="deskripsi">
                    {{ $game['deskripsi'] }}
                </p>

                <a href="{{ $game['download'] ?? '#' }}"
                   class="tombol"
                   target="_blank"
                   rel="noopener noreferrer">
                    ⬇ Download Game
                </a>
                </p>

                <a href="{{ url('/') }}#game" class="tombol tombol-kembali">
                    ← Kembali ke Daftar Game
                </a>
            </div>

        </div>
    </main>

    <footer>
        © {{ date('Y') }} GameVerse — Dunia Game Favoritmu
    </footer>

</body>
</html>