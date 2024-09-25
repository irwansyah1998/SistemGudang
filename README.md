# Sistem Gudang

Sistem Gudang adalah aplikasi berbasis web yang dibangun dengan Laravel 10 untuk mengelola data barang dan mutasi. Aplikasi ini menyediakan RESTful API yang aman dengan autentikasi menggunakan Bearer Token.

## Fitur

- Autentikasi pengguna dengan token
- Operasi CRUD untuk model User, Barang, dan Mutasi
- Riwayat mutasi untuk setiap barang
- Riwayat mutasi untuk setiap pengguna
- Output data dalam format JSON
- LSwagger Documentation

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
cd SistemGudang
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

Kemudian, buka file .env dan ubah detail koneksi database:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

### 4. Generate Key Aplikasi

Jalankan perintah berikut untuk mengenerate aplikasi key:

```bash
php artisan key:generate
```

### 5. Migrasi Database

Jalankan migrasi untuk membuat tabel di database:

```bash
php artisan migrate
```

### 6. Menjalankan Aplikasi

Jika Anda tidak menggunakan Docker, Anda bisa menjalankan aplikasi menggunakan server built-in Laravel:

```bash
php artisan serve
```

Aplikasi akan berjalan di http://localhost:8000.

## Dokumentasi

Untuk dokumentasi akan berjalan pada :

```bash
http://localhost:8000/api/documentation
```