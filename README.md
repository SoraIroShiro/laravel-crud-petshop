# CatLover Petshop Marketplace

Aplikasi marketplace sederhana untuk penjualan barang petshop berbasis Laravel.

## Fitur
- CRUD Barang Petshop
- Upload gambar produk
- Landing page & marketplace interaktif
- Detail produk dengan tombol beli via WhatsApp
- Rekomendasi produk
- Autentikasi user

## Syarat
- *GUNAKAN PHP VERSI 7.4.8 UNTUK MENJALANKAN*
- link download XAMPP versi 7.4.8 [https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.8/]

## Instalasi

### 1. Clone Repository
```sh
git clone https://github.com/username/nama-repo.git
cd nama-repo
```

### 2. Install Dependency Composer
```sh
composer install
```

### 3. Copy File Environment
```sh
cp .env.example .env
```
> **Windows:**  
> Jika `cp` tidak tersedia, gunakan:
> ```
> copy .env.example .env
> ```

### 4. Generate Application Key
```sh
php artisan key:generate
```

### 5. Setting Database
Edit file `.env` dan sesuaikan bagian berikut dengan database MySQL kamu:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username_mysql
DB_PASSWORD=password_mysql
```

### 6. Migrasi Database
```sh
php artisan migrate
```

### 7. (Opsional) Jalankan Seeder
Jika ada seeder, jalankan:
```sh
php artisan db:seed
```

### 8. Storage Link (untuk upload gambar)
```sh
php artisan storage:link
```

### 9. Jalankan Server Lokal
```sh
php artisan serve
```
Akses aplikasi di [http://localhost:8000](http://localhost:8000)

---

## Catatan
- Pastikan PHP, Composer, dan MySQL sudah terinstall di komputer kamu.
- Untuk upload gambar, pastikan folder `storage` dan `public/storage` bisa ditulis.
- Default login/register sudah aktif (Laravel Auth).

---

## Lisensi
MIT