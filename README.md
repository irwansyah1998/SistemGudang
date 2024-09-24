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
git clone https://github.com/username/sistem-gudang.git
cd sistem-gudang
```