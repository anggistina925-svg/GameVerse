<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/game/{nama}', function ($nama) {
    $games = [
        'free-fire' => [
            'nama' => 'Free Fire',
            'kategori' => 'BATTLE ROYALE',
            'gambar' => 'free-fire.jpg',
            'deskripsi' => 'Bertahan dan jadilah pemenang di arena pertempuran. Gunakan strategi dan kerja sama untuk meraih kemenangan.',
            'download' => 'https://ff.garena.com/id/',
        ],

        'genshin-impact' => [
            'nama' => 'Genshin Impact',
            'kategori' => 'RPG',
            'gambar' => 'genshin-impact.jpg',
            'deskripsi' => 'Jelajahi dunia fantasi Teyvat, temukan karakter menarik, dan selesaikan berbagai petualangan.',
            'download' => 'https://genshin.hoyoverse.com/',
        ],

        'minecraft' => [
            'nama' => 'Minecraft',
            'kategori' => 'SANDBOX',
            'gambar' => 'Minecraft.jpg',
            'deskripsi' => 'Bangun dunia impianmu, kumpulkan sumber daya, dan berkreasi tanpa batas.',
            'download' => 'https://www.minecraft.net/download',
        ],

        'mobile-legends' => [
            'nama' => 'Mobile Legends',
            'kategori' => 'MOBA',
            'gambar' => 'mobile-legend.jpg',
            'deskripsi' => 'Bekerja sama dengan tim, pilih hero favorit, dan susun strategi untuk memenangkan pertandingan.',
            'download' => 'https://play.google.com/store/apps/details?id=com.mobile.legends',
        ],

        'pubg-mobile' => [
            'nama' => 'PUBG Mobile',
            'kategori' => 'BATTLE ROYALE',
            'gambar' => 'pubg-mobile.jpg',
            'deskripsi' => 'Jelajahi medan pertempuran dan gunakan strategi untuk bertahan hingga akhir permainan.',
            'download' => 'https://www.pubgmobile.com/id/home.shtml',
        ],

        'valorant' => [
            'nama' => 'VALORANT',
            'kategori' => 'FPS',
            'gambar' => 'valorant.jpg',
            'deskripsi' => 'Uji ketepatan, kemampuan, dan strategi tim dalam permainan tembak-menembak taktis.',
            'download' => 'https://playvalorant.com/id-id/download/',
        ],
    ];

    if (!isset($games[$nama])) {
        abort(404);
    }

    return view('detail', [
        'game' => $games[$nama],
    ]);
})->name('game.detail');
