<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $artikel = [
            [
                'id' => 1,
                'judul' => 'Mengenal Kecerdasan Buatan',
                'kategori' => 'Artificial Intelligence',
                'ringkasan' => 'Mengenal teknologi AI dan manfaatnya dalam kehidupan sehari-hari.'
            ],
            [
                'id' => 2,
                'judul' => 'Tips Menjaga Keamanan Data Pribadi',
                'kategori' => 'Keamanan Digital',
                'ringkasan' => 'Pelajari cara melindungi informasi pribadi ketika menggunakan internet.'
            ],
            [
                'id' => 3,
                'judul' => 'Teknologi dalam Dunia Pendidikan',
                'kategori' => 'Pendidikan Digital',
                'ringkasan' => 'Teknologi membantu kegiatan belajar menjadi lebih fleksibel.'
            ]
        ];

        return view('beranda', compact('artikel'));
    }

    public function penulis()
    {
        return view('penulis');
    }
}