<?php

namespace App\Http\Controllers;

class ArtikelController extends Controller
{
    private function semuaArtikel()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Mengenal Kecerdasan Buatan',
                'kategori' => 'Artificial Intelligence',
                'tanggal' => '20 Oktober 2026',
                'ringkasan' => 'Mengenal teknologi AI dan manfaatnya dalam kehidupan sehari-hari.',
                'isi' => 'Kecerdasan buatan atau Artificial Intelligence (AI) adalah teknologi yang memungkinkan komputer melakukan tugas yang biasanya membutuhkan kecerdasan manusia. Contohnya adalah asisten virtual, penerjemah otomatis, dan rekomendasi video.'
            ],
            [
                'id' => 2,
                'judul' => 'Tips Menjaga Keamanan Data Pribadi',
                'kategori' => 'Keamanan Digital',
                'tanggal' => '18 Oktober 2026',
                'ringkasan' => 'Pelajari cara melindungi informasi pribadi ketika menggunakan internet.',
                'isi' => 'Keamanan digital penting saat menggunakan internet. Gunakan kata sandi yang kuat, jangan membagikan kode OTP kepada orang lain, dan hindari membuka tautan mencurigakan.'
            ],
            [
                'id' => 3,
                'judul' => 'Teknologi dalam Dunia Pendidikan',
                'kategori' => 'Pendidikan Digital',
                'tanggal' => '15 Oktober 2026',
                'ringkasan' => 'Teknologi membantu kegiatan belajar menjadi lebih fleksibel.',
                'isi' => 'Teknologi pendidikan mencakup penggunaan komputer, internet, aplikasi belajar, dan kelas daring. Teknologi dapat membantu siswa mengakses materi dan berkolaborasi dalam pembelajaran.'
            ],
            [
                'id' => 4,
                'judul' => 'Mengenal Komputasi Awan',
                'kategori' => 'Komputasi Awan',
                'tanggal' => '12 Oktober 2026',
                'ringkasan' => 'Ketahui manfaat penyimpanan dan layanan data melalui internet.',
                'isi' => 'Komputasi awan atau cloud computing adalah layanan penyimpanan dan pengolahan data melalui internet. Pengguna dapat mengakses berkas dari berbagai perangkat.'
            ],
            [
                'id' => 5,
                'judul' => 'Mengenal Internet of Things',
                'kategori' => 'Internet of Things',
                'tanggal' => '10 Oktober 2026',
                'ringkasan' => 'Perangkat yang terhubung ke internet dapat membantu aktivitas sehari-hari.',
                'isi' => 'Internet of Things atau IoT adalah konsep menghubungkan benda fisik ke internet agar dapat mengirim dan menerima data. Contohnya adalah lampu pintar dan sensor suhu.'
            ]
        ];
    }

    public function index()
    {
        $artikel = $this->semuaArtikel();

        return view('artikel.index', compact('artikel'));
    }

    public function kategori()
    {
        $kategori = [
            'Artificial Intelligence',
            'Keamanan Digital',
            'Pendidikan Digital',
            'Komputasi Awan',
            'Internet of Things'
        ];

        return view('artikel.kategori', compact('kategori'));
    }

    public function detail($id)
    {
        $artikel = collect($this->semuaArtikel())->firstWhere('id', (int) $id);

        if (!$artikel) {
            abort(404);
        }

        return view('artikel.detail', compact('artikel'));
    }
}