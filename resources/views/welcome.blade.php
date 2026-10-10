<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone - Koleksi Game</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #101827;
            color: white;
        }

        header {
            background: #18243a;
            padding: 22px;
            text-align: center;
        }

        header h1 {
            color: #38bdf8;
            margin: 0 0 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 25px;
        }

        .games {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: #1e293b;
            border-radius: 12px;
            overflow: hidden;
            padding-bottom: 18px;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .card h3 {
            margin: 15px 8px;
        }

        .card a {
            display: inline-block;
            background: #0284c7;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 7px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #18243a;
            margin-top: 30px;
        }

        @media (max-width: 700px) {
            .games {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 420px) {
            .games {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>GameZone</h1>
        <p>Temukan game favoritmu!</p>

        <nav>
            <a href="/">Beranda</a>
        </nav>
    </header>

    <main class="container">
        <h2>Koleksi Game</h2>
        <p>Pilih game untuk melihat informasi lengkapnya.</p>

        <div class="games">
            @foreach ($games as $game)
                <div class="card">
                    <img
                        src="{{ asset('images/' . $game['image']) }}"
                        alt="{{ $game['name'] }}"
                    >

                    <h3>{{ $game['name'] }}</h3>

                    <a href="{{ route('game.detail', $game['id']) }}">
                        Lihat Detail
                    </a>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} GameZone</p>
    </footer>
</body>
</html>