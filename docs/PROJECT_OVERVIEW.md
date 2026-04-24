# Project Overview

## Gambaran Umum

Phydiags adalah platform pembelajaran fisika yang berfokus pada diagnosis miskonsepsi siswa. Aplikasi ini mendukung pengelolaan kelas, paket soal, ujian, hasil ujian, serta materi remediasi yang disesuaikan dengan kategori kesalahan jawaban.

## Tujuan Sistem

- mengelola akun pengguna berdasarkan role
- memfasilitasi pembelajaran fisika secara terstruktur
- menyediakan ujian untuk siswa dan analisis hasil untuk guru
- menampilkan materi remediasi berdasarkan kategori kesalahan
- mendukung pengelolaan kelas dan keanggotaan kelas

## Arsitektur Aplikasi

Proyek ini mengikuti pola MVC:

- model menyimpan data guru, siswa, kelas, ujian, jawaban, dan materi remediasi
- controller menangani alur bisnis dan navigasi halaman
- view menampilkan halaman utama, form, laporan, dan materi pembelajaran

## Komponen Utama

### 1. Beranda dan Informasi Sistem

`ReduksiController` menyediakan halaman informasi seperti:

- fungsi Phydiags
- tentang Phydiags
- panduan Phydiags
- perancang Phydiags

### 2. Autentikasi dan Role

`Auth::routes()` digunakan untuk login dan registrasi. Setelah login, pengguna diarahkan ke dashboard sesuai role.

Role yang digunakan:

- admin
- guru
- siswa

### 3. Manajemen Pengguna

`UserController` mengelola:

- data guru
- data siswa
- panduan guru
- panduan siswa

### 4. Profil Pengguna

`ProfilController` menangani:

- pengisian profil guru
- pembaruan profil guru
- pengisian profil siswa
- pembaruan profil siswa

### 5. Kelas dan Keanggotaan

`KelasController` digunakan untuk:

- membuat kelas oleh guru
- bergabung ke kelas oleh siswa
- melihat anggota kelas
- melihat hasil ujian dalam kelas
- membuka materi remediasi sesuai kategori hasil

### 6. Paket Soal dan Soal Bertingkat

`PaketSoalController` menangani:

- pembuatan paket soal
- pembuatan soal satuan
- soal tingkat 1 sampai 4
- update soal dengan atau tanpa gambar

### 7. Ujian dan Analisis

`UjianController` adalah inti sistem evaluasi. Controller ini menangani:

- pembuatan ujian oleh guru
- daftar peserta ujian otomatis dari anggota kelas
- tampilan hasil ujian per kelas
- tampilan hasil ujian per siswa
- analisis per soal
- grafik miskonsepsi
- detail miskonsepsi
- ekspor hasil ujian ke Excel

### 8. Materi Remediasi

`ReduksiController` menyimpan materi remediasi untuk:

- miskonsepsi 1 sampai 6 yang terlihat pada route utama
- false positive
- false negative
- lack of knowledge

## Model Data

Beberapa model utama yang digunakan:

- `User`
- `Guru`
- `Siswa`
- `Kelas`
- `AnggotaKelas`
- `PaketSoal`
- `SoalSatuan`
- `SoalTk1`
- `SoalTk2`
- `SoalTk3`
- `SoalTk4`
- `Ujian`
- `PesertaUjian`
- `HasilUjian`
- `Panduan`
- `Reduksimsatu`
- `Reduksimdua`
- `Reduksimtiga`
- `Reduksimempat`
- `Reduksimlima`
- `Reduksimenam`
- `ReduksifalsePositive`
- `ReduksifalseNegative`
- `Reduksilk`

## Alur Penggunaan Sistem

1. Admin membuat akun guru dan siswa.
2. Guru melengkapi profil dan membuat kelas.
3. Siswa melengkapi profil dan bergabung ke kelas.
4. Guru membuat paket soal dan ujian.
5. Siswa mengikuti ujian.
6. Sistem menyimpan jawaban dan menampilkan hasil.
7. Guru menganalisis miskonsepsi dan memberikan remediasi.

## Analisis Hasil Ujian

Sistem menghitung kategori jawaban seperti:

- SC
- FP
- LK
- FN
- MSC

Hasil tersebut divisualisasikan dalam grafik untuk membantu guru memahami pola kesalahan siswa.

## Keunggulan Implementasi

- cocok untuk pembelajaran berbasis diagnosis
- mendukung alur guru dan siswa secara terpisah
- ada materi remediasi yang jelas
- analisis hasil ujian lebih terstruktur
- mendukung pengembangan soal bertingkat
