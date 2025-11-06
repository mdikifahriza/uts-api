# UTS API – Laravel Project

API sederhana berbasis **Laravel** untuk manajemen data mahasiswa.

## 🚀 Setup & Installation

1. **Clone Repository**

   ```bash
   git clone https://github.com/mdikifahriza/uts-api.git
   cd uts-api
   ```

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Setup Environment**

   ```bash
   cp .env.example .env
   ```

4. **Konfigurasi Database**

   * Buat database baru, misalnya `mahasiswa`
   * Atur nama DB, user, dan password di file `.env`

5. **Generate App Key**

   ```bash
   php artisan key:generate
   ```

6. **Migrasi & Seeder**

   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan Server**

   ```bash
   php artisan serve
   ```

## ✅ Endpoint Utama

Cek dokumentasi API atau akses `http://127.0.0.1:8000/api` setelah server berjalan.

---

**Made with ❤️ using Laravel**
