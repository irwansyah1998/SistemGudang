# Sistem Gudang

Sistem Gudang adalah aplikasi berbasis web yang dibangun dengan Laravel 10 untuk mengelola data barang dan mutasi. Aplikasi ini menyediakan RESTful API yang aman dengan autentikasi menggunakan Bearer Token.

## Fitur

- Autentikasi pengguna dengan token
- Operasi CRUD untuk model User, Barang, dan Mutasi
- Riwayat mutasi untuk setiap barang
- Riwayat mutasi untuk setiap pengguna
- Output data dalam format JSON

## Prasyarat

Sebelum memulai, pastikan Anda memiliki:

- PHP 8.1 atau lebih tinggi
- Composer
- Nginx
- MySQL
- Docker (jika ingin menggunakan Docker)

## Instalasi

### 1. Clone Repository

Clone repositori ini ke dalam direktori lokal Anda:

```bash
git clone https://github.com/irwansyah1998/sistem-gudang.git
cd sistem-gudang
```

### 2. Install Dependensi

Jika Anda tidak menggunakan Docker, jalankan perintah berikut untuk menginstal dependensi Laravel:

```bash
composer install
```

### 3. Konfigurasi .env

Salin file .env.example ke .env dan sesuaikan pengaturan database:

```bash
cp .env.example .env
```