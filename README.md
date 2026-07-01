# Website Andema

Company profile website untuk **PT. Andema Makmur Sejahtera**, dibangun menggunakan PHP native (tanpa framework) dengan sistem routing custom, MySQL sebagai database, dan PHPMailer untuk pengiriman email dari form kontak.

## Fitur

- **Halaman company profile**: Home, About (Visi & Misi, Board Management, Core Values, Achievement, Download, CSR), Services, Gallery, Project
- **Halaman produk** per brand/vendor: International Paint, Jotun, Hempel, PPG Coatings, Carboline, KCC — masing-masing dengan halaman berpaging
- **Form kontak** yang mengirim email notifikasi via SMTP (PHPMailer) ke tim marketing
- **Fitur pencarian produk**
- **Custom router** (`router.php` & `routes.php`) yang menangani method GET/POST/PUT/PATCH/DELETE dan route dinamis (mis. `/product/$paint/$name`)
- **Access logging** sederhana ke `url_logs.txt` untuk setiap request yang masuk

## Struktur Direktori

```
andema/
├── about/                  # Halaman-halaman about (visi misi, board, core values, dst.)
├── assets/                 # CSS, JS, font, gambar, thumbnail
├── contact/                # Form kontak + PHPMailer
├── galery/                 # Halaman galeri
├── part/                   # Komponen shared: head, header, footer, nav, koneksi DB, pagination
├── product/                # Halaman produk per brand vendor
├── project/                # Halaman daftar proyek
├── services/                # Halaman layanan
├── views/                  # View umum (404, dsb.)
├── home.php                # Halaman utama (index)
├── router.php              # Engine routing custom
├── routes.php              # Definisi seluruh route + access logger
├── search.php / searchProduct.php  # Fitur pencarian
└── url_logs.txt            # Log akses (auto-generated)
```

## Kebutuhan Sistem

- PHP 7.4+ (menggunakan ekstensi `mysqli`)
- MySQL / MariaDB
- Web server dengan Apache (mod_rewrite) atau Nginx yang dikonfigurasi untuk mengarahkan semua request ke `routes.php`
- Ekstensi PHP: `mysqli`, `openssl` (untuk SMTP over SSL)

## Instalasi & Menjalankan Secara Lokal

1. **Clone / extract project** ke direktori web server (mis. `htdocs` untuk XAMPP, atau `www` untuk Laragon).

2. **Buat database MySQL** sesuai nama yang digunakan aplikasi, lalu import struktur tabel yang dibutuhkan (skema database tidak disertakan dalam repo ini — perlu direkonstruksi manual dari query pada masing-masing file `product/*.php`, atau minta dump dari environment produksi).

3. **Atur koneksi database** di `andema/part/connect.php`:
   ```php
   $servername = "localhost";
   $username   = "nama_user_db";
   $password   = "password_db";
   $dbname     = "nama_database";
   ```

4. **Atur SMTP untuk form kontak** di `andema/contact/contact.php` (bagian konfigurasi `$mail->Host`, `$mail->Username`, `$mail->Password`, dst.) sesuai kredensial email pengirim yang dipakai.

5. **Konfigurasi document root** web server agar mengarah ke folder `andema/`, dan pastikan semua request diarahkan ke `routes.php` (mis. via `.htaccess` rewrite ke `routes.php` jika belum ada, karena file tersebut belum ditemukan di repo saat ini).

6. Akses melalui browser, mis. `http://localhost/`.


## Routing

Routing didefinisikan di `routes.php` menggunakan helper dari `router.php`:

```php
get('/product/jotun', 'product/jotun/jotun.php');
get('/product/jotun/$paging', 'product/jotun/jotun.php');   // route dinamis dengan parameter $paging
post('/contact/submit-mail', 'contact/contact.php');
any('/404', 'views/404.php');
```

Route yang tidak cocok dengan pola manapun akan diarahkan ke halaman `views/404.php`.

