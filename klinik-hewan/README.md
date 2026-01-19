🚀 Cara Menjalankan Aplikasi
1️⃣ Install Dependency

Jalankan perintah berikut di root project:

composer install

2️⃣ Konfigurasi Environment

Salin file .env.example menjadi .env:

cp .env.example .env

Lalu sesuaikan konfigurasi database pada file .env:

DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password

Pastikan database sudah dibuat di MySQL.

3️⃣ Generate Application Key
php artisan key:generate

4️⃣ Jalankan Migrasi Database
php artisan migrate

5️⃣ Jalankan Seeder

Seeder digunakan untuk mengisi data awal aplikasi.

php artisan db:seed

6️⃣ Jalankan Server
php artisan serve

Akses aplikasi melalui browser:

http://127.0.0.1:8000
