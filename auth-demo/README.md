[### 1. Prasyarat (Prerequisites)
Pastikan perangkat sudah terinstal:
- PHP >= 8.2
- Composer
- MySQL / MariaDB (melalui XAMPP / Laragon)
- Node.js & NPM

### 2. Kloning Repositori
Kloning proyek ini dari GitHub ke directory lokal:

git clone https://github.com/sonicmortis/tugas-laravel-authentication-dan-breeze/tree/main
cd auth-demo

### 3. Instalasi Dependensi PHP & JavaScript
Jalankan perintah berikut untuk menginstal semua package yang dibutuhkan aplikasi:

# Instal dependensi backend Laravel via Composer
composer install

# Instal dependensi frontend & kompilasi aset via NPM
npm install
npm run build

### 4. Konfigurasi Environment (.env)
Salin file .env.example untuk membuat file konfigurasi lingkungan lokal .env:

cp .env.example .env

Buka file .env baru tersebut, lalu sesuaikan konfigurasi koneksi database MySQL (sesuaikan port dan password jika menggunakan XAMPP/Laragon):

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth_demo_db
DB_USERNAME=root
DB_PASSWORD=

### 5. Generate Application Key
Buat key enkripsi pengaman aplikasi Laravel yang baru menggunakan perintah:

php artisan key:generate

### 6. Migrasi Database
Buat database baru bernama auth_demo_db melalui phpMyAdmin, lalu jalankan perintah berikut di terminal untuk mengeksekusi semua struktur tabel beserta kolom kustom (no_hp` dan role):

php artisan migrate

### 7. Jalankan Aplikasi Lokal
Nyalakan server lokal Laravel  dengan perintah:

php artisan serve

Aplikasi kini telah aktif dan dapat diakses sepenuhnya melalui browser pada alamat: http://localhost:8000

### Pengujian Akses User Biasa (Tugas 1 dan 2)
1. Akses halaman pendaftaran di: http://localhost:8000/register
2. Lakukan registrasi akun baru dengan mengisi Nama, Email, No. HP, dan Password.
3. Setelah masuk ke halaman Dashboard, buka menu Profile untuk menguji pembaruan data serta sinkronisasi nomor handphone baru secara permanen.

### Pengujian Proteksi Halaman Admin (Tugas 3)
1. Masuk ke phpMyAdmin, buka database auth_demo_db, lalu buka tabel users.
2. Klik tombol Edit pada akun pengguna yang sudah didaftarkan tadi, ubah nilai pada kolom role dari yang semula user menjadi admin, kemudian klik Go / Kirim.
3. Kembali ke browser dan akses URL khusus admin di: http://localhost:8000/admin
4. Sistem akan menampilkan halaman Admin Dashboard berisi tabel daftar seluruh user secara dinamis. Jika mencoba mengakses URL tersebut menggunakan akun dengan role user, gerbang middleware otomatis memblokir request dan melempar tampilan error 403 | Akses Ditolak.]