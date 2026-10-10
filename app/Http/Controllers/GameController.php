<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    private function daftarGame()
    {
        return [
            [
                'slug' => 'mobile-legends',
                'nama' => 'Mobile Legends',
                'genre' => 'MOBA',
                'platform' => 'Android, iOS',
                'tahun' => 2016,
                'deskripsi' => 'Game pertarungan tim lima lawan lima.',
                'gambar' => 'https://placehold.co/600x350?text=Mobile+Legends'
            ],
            [
                'slug' => 'free-fire',
                'nama' => 'Free Fire',
                'genre' => 'Battle Royale',
                'platform' => 'Android, iOS',
                'tahun' => 2017,
                'deskripsi' => 'Game bertahan hidup dan bertarung.',
                'gambar' => 'https://placehold.co/600x350?text=Free+Fire'
            ],
            [
                'slug' => 'minecraft',
                'nama' => 'Minecraft',
                'genre' => 'Sandbox',
                'platform' => 'PC, Konsol, Mobile',
                'tahun' => 2011,
                'deskripsi' => 'Game membangun dan menjelajahi dunia.',
                'gambar' => 'https://placehold.co/600x350?text=Minecraft'
            ],
            [
                'slug' => 'pubg-mobile',
                'nama' => 'PUBG Mobile',
                'genre' => 'Battle Royale',
                'platform' => 'Android, iOS',
                'tahun' => 2018,
                'deskripsi' => 'Game strategi bertahan hidup.',
                'gambar' => 'https://placehold.co/600x350?text=PUBG+Mobile'
            ],
            [
                'slug' => 'valorant',
                'nama' => 'Valorant',
                'genre' => 'FPS',
                'platform' => 'PC',
                'tahun' => 2020,
                'deskripsi' => 'Game tembak-menembak berbasis tim.',
                'gambar' => 'https://placehold.co/600x350?text=Valorant'
            ],
            [
                'slug' => 'genshin-impact',
                'nama' => 'Genshin Impact',
                'genre' => 'Action RPG',
                'platform' => 'PC, Konsol, Mobile',
                'tahun' => 2020,
                'deskripsi' => 'Game petualangan di dunia fantasi.',
                'gambar' => 'https://placehold.co/600x350?text=Genshin+Impact'
            ],
        ];
    }

    public function index()
    {
        $games = $this->daftarGame();

        return view('games.index', compact('games'));
    }

    public function show($slug)
    {
        $games = $this->daftarGame();
        $game = null;

        foreach ($games as $item) {
            if ($item['slug'] === $slug) {
                $game = $item;
                break;
            }
        }

        return view('games.show', compact('game'));
    }
}