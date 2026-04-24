# Phydiags

Phydiags adalah aplikasi berbasis Laravel 5.8 untuk pembelajaran dan diagnosis miskonsepsi fisika. Sistem ini mengelola akun admin, guru, dan siswa, serta menyediakan materi pembelajaran, paket soal, ujian, hasil ujian, dan materi remediasi.

## Ringkasan

Sistem ini dirancang untuk mendukung proses pembelajaran fisika secara terstruktur dengan fokus pada identifikasi miskonsepsi. Pengguna dapat mengelola kelas, menyusun ujian, mengerjakan soal, melihat hasil, dan mempelajari materi remediasi sesuai jenis kesalahan jawaban.

## Fitur Utama

- login berbasis role untuk admin, guru, dan siswa
- dashboard berbeda sesuai peran pengguna
- manajemen akun guru dan siswa oleh admin
- pengisian profil guru dan siswa
- pembuatan kelas dan gabung kelas
- pembuatan paket soal dan soal bertingkat
- ujian daring untuk siswa
- analisis hasil ujian per siswa dan per soal
- grafik miskonsepsi
- materi remediasi false positive, false negative, lack of knowledge, dan miskonsepsi bertingkat
- ekspor hasil ujian ke Excel

## Teknologi

- Laravel 5.8
- PHP 7.1+
- Eloquent ORM
- Maatwebsite Excel
- Blade template

## Struktur Modul

- HomeController: dashboard role-based
- UserController: akun guru, akun siswa, dan panduan
- ProfilController: profil guru dan siswa
- KelasController: kelas, anggota kelas, dan hasil belajar
- PaketSoalController: paket soal dan soal tingkat 1 sampai 4
- UjianController: pelaksanaan ujian, hasil, analisis, dan ekspor
- ReduksiController: halaman informasi Phydiags dan materi remediasi
- PesanController: pesan pembelajaran
- AdminController: pengelolaan profil admin

## Rute Penting

- /login: halaman login
- /: beranda
- /home/materi: materi pembelajaran
- /home/false_positive: materi false positive
- /home/false_negative: materi false negative
- /home/knowladge: materi lack of knowledge
- /home/miskonsepsi: materi miskonsepsi
- /fungsiPhydiags: halaman fungsi sistem
- /tentangPhydiags: halaman tentang sistem
- /panduanPhydiags: halaman panduan
- /perancangPhydiags: halaman perancang
- /guru/*: area guru
- /siswa/*: area siswa
- /logout: keluar dari sistem

## Cara Menjalankan

1. Salin .env.example menjadi .env
2. Sesuaikan konfigurasi database
3. Jalankan composer install
4. Jalankan php artisan key:generate
5. Jalankan php artisan migrate
6. Jalankan php artisan serve

## Dokumentasi Tambahan

- [Project Overview](docs/PROJECT_OVERVIEW.md)
- [User Guide](docs/USER_GUIDE.md)

## Catatan Teknis

- sistem menggunakan relasi data yang kompleks antara guru, siswa, kelas, ujian, dan hasil ujian
- materi remediasi dibagi berdasarkan jenis miskonsepsi
- laporan hasil ujian dapat diekspor ke Excel
- beberapa halaman menggunakan pagination untuk menjaga tampilan tetap ringan
