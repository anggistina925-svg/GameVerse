# TeknoWawasan — Website Artikel Teknologi

## 1. Identitas Mahasiswa

- **Nama:** Anggistina
- **NIM:** C2483207011
- **Semester:** 5
- **Mata Kuliah:** Pemrograman Internet
- **Dosen:** Taofik Muhammad, M.Kom

## 2. Judul dan Tema Proyek

- **Judul:** Implementasi Routing dan Konsep MVC Menggunakan Laravel
- **Tema:** Artikel Teknologi

## 3. Deskripsi Proyek

TeknoWawasan merupakan website artikel teknologi yang dibuat menggunakan framework Laravel. Website ini menyediakan informasi mengenai perkembangan teknologi, inovasi digital, dan pengetahuan teknologi melalui halaman beranda, daftar artikel, kategori, detail artikel, dan penulis.

Proyek ini dibuat untuk menerapkan konsep routing dan arsitektur MVC (*Model-View-Controller*) pada Laravel tanpa menggunakan database.

## 4. Fitur Website

1. **Beranda:** Menampilkan pengenalan website dan artikel pilihan.
2. **Daftar Artikel:** Menampilkan kumpulan artikel teknologi.
3. **Kategori:** Menampilkan kategori artikel.
4. **Detail Artikel:** Menampilkan informasi lengkap artikel berdasarkan ID.
5. **Penulis:** Menampilkan informasi mengenai tim penulis.

## 5. Implementasi Routing

Routing digunakan untuk menghubungkan URL dengan controller yang sesuai.

| URL | Fungsi |
|---|---|
| `/` | Halaman Beranda |
| `/penulis` | Halaman Penulis |
| `/artikel` | Daftar Artikel |
| `/kategori` | Daftar Kategori |
| `/artikel/{id}` | Detail Artikel berdasarkan ID |

## 6. Implementasi Controller

Controller digunakan untuk mengatur alur data dan menentukan halaman yang akan ditampilkan.

- **HomeController:** Mengatur halaman Beranda dan Penulis.
- **ArtikelController:** Mengatur daftar artikel, kategori, dan detail artikel.

Data artikel disimpan dalam array PHP pada controller sehingga proyek tidak memerlukan database.

## 7. Implementasi View

View dibuat menggunakan Blade Template Laravel untuk menampilkan informasi kepada pengguna.

File view yang digunakan:

- `resources/views/beranda.blade.php`
- `resources/views/penulis.blade.php`
- `resources/views/artikel/index.blade.php`
- `resources/views/artikel/kategori.blade.php`
- `resources/views/artikel/detail.blade.php`
- `resources/views/layouts/app.blade.php`

Proyek menerapkan `@extends`, `@section`, `@yield`, dan `@foreach` untuk menggunakan layout serta menampilkan data artikel.

## 8. Teknologi yang Digunakan

- Laravel
- PHP
- HTML
- CSS
- Blade Template

## 9. Cara Menjalankan Proyek

1. Pastikan PHP dan Composer sudah terpasang.
2. Buka terminal pada folder proyek.
3. Jalankan perintah berikut:

   ```bash
   php artisan serve
   ```

4. Buka browser dan akses alamat berikut:

   `http://127.0.0.1:8000`

## 10. Screenshot Website

Screenshot halaman website disimpan dalam folder `screenshots`, yang berisi:

- `Beranda.png` — Tampilan halaman beranda.
- `Atikel.png` — Tampilan halaman daftar artikel.
- `Detail.png` — Tampilan halaman detail artikel.