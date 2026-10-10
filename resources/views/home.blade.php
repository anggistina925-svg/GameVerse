```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Game</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            color: #222;
        }
        header {
            background: #172554;
            color: white;
            padding: 25px;
            text-align: center;
        }
        nav {
            background: #1d4ed8;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .container {
            text-align: center;
            padding: 60px 20px;
        }
        .container h2 {
            color: #172554;
            font-size: 32px;
        }
        .container p {
            font-size: 18px;
            line-height: 1.6;
        }
        .tombol {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 14px 25px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 15px;
        }
        footer {
            background: #172554;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>GAMEVERSE</h1>
        <p>Katalog Game Favorit</p>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/game">Daftar Game</a>
    </nav>

    <div class="container">
        <h2>Selamat Datang di GameVerse!</h2>
        <p>
            Temukan berbagai game menarik dari berbagai genre
            dan platform dalam katalog game kami.
        </p>
        <p>
            Jelajahi informasi game, mulai dari nama,
            genre, platform, hingga tahun rilis.
        </p>
        <a href="/game" class="tombol">Lihat Daftar Game</a>
    </div>

    <footer>
        <p>Katalog Game GameVerse</p>
    </footer>
</body>
</html>
```