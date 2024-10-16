# Proyek Laravel

Ini adalah proyek Laravel yang menggunakan PHP 8.1. Proyek ini juga menggunakan npm untuk mengelola dependensi front-end dan aset. Berikut adalah langkah-langkah untuk mengatur dan menjalankan proyek di mesin lokal Anda.

## Persyaratan

Sebelum memulai, pastikan Anda telah menginstal perangkat lunak berikut di sistem Anda:

- [PHP 8.1](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [Node.js dan npm](https://nodejs.org/)
- [MySQL](https://www.mysql.com/) atau [PostgreSQL](https://www.postgresql.org/)
- [Git](https://git-scm.com/)

## Langkah-langkah Instalasi

### 1. Clone repository

Untuk memulai, clone repository dari proyek ini dan pindah ke direktori proyek:

```bash
git clone <url_repository>
cd <nama_direktori_proyek>
```

### 2. Install dependency

```bash
composer install
npm install
```

### 3. Atur environment
Copykan seluruh text di `.env.example` dan buat file `.env` dan pastekan isinya

### 4. Generate kunci aplikasi
Jalankan perintah berikut untuk menghasilkan kunci aplikasi Laravel:

```bash
php artisan key:generate
```

### 5. Migrasi database
```bash
php artisan migrate
```

### 6. Jalankan aplikasi
```bash
php artisan serve
npm run dev
```

## Peraturan
Dilarang keras push ke branch `develop`, silahkan untuk membuat branch baru dan buat code review ke adiyatan