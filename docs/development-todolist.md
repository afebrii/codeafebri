# Development Todolist — Codeafebri

**Versi:** 1.1  
**Dibuat:** April 2026  
**Berdasarkan:** Project Brief v2.0  
**Stack:** Laravel 12 · Tailwind CSS v4 · Alpine.js v3.x · MySQL 8.4 · Xendit

---

## 📋 Legenda Status

| Simbol | Arti |
|--------|------|
| `[ ]` | Belum dikerjakan |
| `[/]` | Sedang dikerjakan |
| `[x]` | Selesai |

---

## 🎨 Color Palette & Design Tokens

> Referensi warna ini diimplementasikan di `tailwind.config.js` (Tailwind v4: `@theme` block di CSS).

### Primary — Kuning (Yellow)

| Token | Hex | Kegunaan |
|---|---|---|
| `primary-50` | `#FEF9C3` | Background badge, highlight ringan |
| `primary-300` | `#FDE047` | Hover state, aksen ringan |
| `primary-500` | `#EAB308` | **Warna utama** — tombol, link aktif, aksen |
| `primary-600` | `#CA8A04` | Hover tombol primary |
| `primary-800` | `#854D0E` | Teks di atas background kuning terang |

### Dark / Background

| Token | Hex | Kegunaan |
|---|---|---|
| `dark-950` | `#0C0A09` | Background terdalam, navbar sticky |
| `dark-900` | `#1C1917` | **Background utama body** |
| `dark-800` | `#292524` | Background card, sidebar |
| `dark-700` | `#44403C` | Border card, divider |
| `dark-600` | `#57534E` | Border hover |

### Neutral — Teks

| Token | Hex | Kegunaan |
|---|---|---|
| `neutral-100` | `#F5F5F4` | **Teks heading utama** |
| `neutral-300` | `#D6D3D1` | Teks body |
| `neutral-500` | `#A8A29E` | Teks muted / placeholder |
| `neutral-600` | `#78716C` | Teks hint, label form |

### Semantic

| Token | Hex | Kegunaan |
|---|---|---|
| `success` | `#22C55E` | Pembayaran sukses, badge aktif |
| `info` | `#3B82F6` | Notifikasi info, badge course |
| `warning` | `#F97316` | Peringatan, badge pending |
| `danger` | `#EF4444` | Error, tombol hapus |

### Panduan Penggunaan Warna

- **Tombol primary:** `bg-primary-500 text-dark-950 hover:bg-primary-600`
- **Tombol outline:** `border border-primary-500 text-primary-500 hover:bg-primary-500/10`
- **Card:** `bg-dark-800 border border-dark-700 rounded-xl`
- **Badge produk:** `bg-primary-50 text-primary-800` (light) atau `bg-dark-700 text-primary-300` (dark)
- **Link aktif:** `text-primary-500`
- **Teks heading:** `text-neutral-100`
- **Teks body:** `text-neutral-300`
- **Teks muted:** `text-neutral-500`

### Implementasi di Tailwind CSS v4

```css
/* resources/css/app.css */
@import "tailwindcss";

@theme {
  --color-primary-50: #FEF9C3;
  --color-primary-300: #FDE047;
  --color-primary-500: #EAB308;
  --color-primary-600: #CA8A04;
  --color-primary-800: #854D0E;

  --color-dark-950: #0C0A09;
  --color-dark-900: #1C1917;
  --color-dark-800: #292524;
  --color-dark-700: #44403C;
  --color-dark-600: #57534E;

  --color-neutral-100: #F5F5F4;
  --color-neutral-300: #D6D3D1;
  --color-neutral-500: #A8A29E;
  --color-neutral-600: #78716C;

  --color-success: #22C55E;
  --color-info: #3B82F6;
  --color-warning: #F97316;
  --color-danger: #EF4444;

  --font-heading: "Sora", "Plus Jakarta Sans", sans-serif;
  --font-body: "DM Sans", "Inter", sans-serif;
  --font-mono: "JetBrains Mono", "Fira Code", monospace;
}
```

---

## ⚙️ Tech Stack (Latest)

| Layer | Teknologi | Versi |
|---|---|---|
| Backend framework | Laravel | **12.x** |
| Frontend styling | Tailwind CSS | **v4.x** |
| JavaScript interaktif | Alpine.js | **v3.x** |
| Database | MySQL | **8.4 LTS** |
| Storage file | Laravel Storage + Cloudflare R2 | latest |
| Auth | Laravel Breeze | **2.x** |
| Payment | **Xendit** (Invoice, E-Wallet, QRIS, VA, Kartu Kredit) | SDK `xendit/xendit-php` |
| Video course | YouTube IFrame API | latest |
| Email | Laravel Mail + **Resend** (production) | latest |
| Deploy | VPS Ubuntu 24.04 + Nginx + SSL (Let's Encrypt) | — |
| Queue | Laravel Queue + **Redis 7** | — |
| PDF generate | **barryvdh/laravel-dompdf** `^3.x` | latest |
| Asset bundling | **Vite 6.x** | latest |
| Node.js | Node.js | **22 LTS** |
| PHP | PHP | **8.4** |

---

## 🚀 Phase 0 — Project Setup & Foundation

> Durasi estimasi: **3–5 hari**  
> Tujuan: Pondasi project siap, environment berjalan, design system terpasang.

### Environment & Konfigurasi
- [ ] Install **Laravel 12** + konfigurasi `.env` (DB, mail, queue, storage)
- [ ] Setup **MySQL 8.4** lokal + production (gunakan Docker atau Laragon)
- [ ] Setup **Laravel Breeze 2.x** (auth scaffolding dengan Blade)
- [ ] Install **Tailwind CSS v4** + **Alpine.js v3.x** via Vite
- [ ] Setup design tokens warna & font di `resources/css/app.css` (blok `@theme`)
  - [ ] Color tokens: `primary-*`, `dark-*`, `neutral-*`, `success`, `info`, `warning`, `danger`
  - [ ] Font tokens: `--font-heading` (Sora), `--font-body` (DM Sans), `--font-mono` (JetBrains Mono)
- [ ] Import Google Fonts di `app.css` (Sora, Plus Jakarta Sans, DM Sans, JetBrains Mono)
- [ ] Setup **Vite 6.x** config untuk asset bundling + HMR
- [ ] Setup **Node.js 22 LTS** & pastikan `package.json` menggunakan versi terbaru
- [ ] Setup Laravel Storage + link symlink public (Cloudflare R2 untuk staging/prod)
- [ ] Setup queue driver: **Redis 7** (prod) / `database` (dev lokal)
- [ ] Setup `.env.example` yang lengkap
- [ ] Konfigurasi `config/app.php` (timezone: `Asia/Jakarta`, locale: `id`)
- [ ] Install package pendukung:
  - [ ] `barryvdh/laravel-dompdf ^3.x` (PDF invoice & sertifikat)
  - [ ] `xendit/xendit-php` (Xendit PHP SDK — payment gateway)
  - [ ] `spatie/laravel-medialibrary` atau custom storage helper untuk upload
  - [ ] `spatie/laravel-sitemap` (sitemap otomatis — Phase 2)
- [ ] Tambahkan konfigurasi Xendit di `config/services.php` (`secret_key`, `webhook_secret`)
- [ ] Buat `XenditService` class di `app/Services/XenditService.php`
- [ ] Setup Git repository + branching strategy (`main`, `dev`, `feature/*`)
- [ ] Buat base layout Blade (`layouts/app.blade.php`, `layouts/admin.blade.php`, `layouts/auth.blade.php`)
- [ ] Buat komponen Blade dasar: button, card, badge, alert, modal
- [ ] Halaman 404 & 500 custom

---

## 🏗️ Phase 1 — MVP (Bulan 1–2)

> Tujuan: Platform bisa menjual produk digital + course, user bisa beli & belajar.

---

### 1.1 Database & Migrations

- [ ] Migration: `users` (tambah kolom: `role`, `whatsapp`, `avatar`)
- [ ] Migration: `products` (nama, slug, deskripsi, harga, kategori, status, include_hosting_guide, thumbnail)
- [ ] Migration: `product_files` (product_id, nama file, path storage, versi)
- [ ] Migration: `product_versions` (product_id, versi, changelog, tanggal rilis)
- [ ] Migration: `courses` (nama, slug, deskripsi, level, harga, thumbnail, status)
- [ ] Migration: `modules` (course_id, judul, urutan)
- [ ] Migration: `episodes` (module_id, judul, youtube_video_id, durasi, is_preview, urutan)
- [ ] Migration: `enrollments` (user_id, course_id, enrolled_at)
- [ ] Migration: `episode_progress` (user_id, episode_id, is_completed, watched_at)
- [ ] Migration: `certificates` (user_id, course_id, nomor_sertifikat, generated_at)
- [ ] Migration: `orders` (user_id, total, status, xendit_invoice_id, xendit_invoice_url, paid_at)
- [ ] Migration: `order_items` (order_id, itemable_type, itemable_id, harga, nama)
- [ ] Migration: `licenses` (user_id, product_id, order_id, license_key, download_count)
- [ ] Migration: `downloads` (license_id, user_id, ip_address, downloaded_at)
- [ ] Migration: `custom_orders` (user_id, jenis, deskripsi, fitur, deadline, budget_min, budget_max, status, kontak)
- [ ] Migration: `coupons` (kode, tipe, nilai, max_uses, used_count, expired_at)
- [ ] Migration: `reviews` (user_id, product_id, rating, komentar)
- [ ] Migration: `wishlists` (user_id, product_id)
- [ ] Buat semua Model Eloquent + relasi
- [ ] Buat Seeder: `AdminSeeder`, `ProductSeeder` (data dummy), `CourseSeeder` (data dummy)
- [ ] Buat Factories untuk testing

---

### 1.2 Auth & Akun Pengguna

- [ ] Registrasi (email + password, verifikasi email)
- [ ] Login & logout
- [ ] Lupa password & reset password via email
- [ ] Verifikasi email (Laravel built-in)
- [ ] Middleware `IsAdmin` untuk admin panel
- [ ] Halaman profil user: edit nama, foto avatar, password, nomor WhatsApp
- [ ] Upload foto profil ke storage
- [ ] Dashboard user (ringkasan: pembelian, course aktif, custom order)

---

### 1.3 Halaman Publik

#### Beranda (Home)
- [ ] Hero section: tagline, subtitle, CTA ("Lihat Produk" & "Mulai Belajar")
- [ ] Section highlight 4 kategori (Website, Mobile, Custom Order, Course)
- [ ] Section produk unggulan (featured products)
- [ ] Section statistik brand (total produk, member, course, project)
- [ ] Section testimoni
- [ ] Section "Cara Kerja" (beli produk & custom order)
- [ ] CTA newsletter (form input email)

#### Halaman Produk (Marketplace)
- [ ] Listing produk (card grid)
- [ ] Filter: kategori, harga, tech stack
- [ ] Search produk
- [ ] Sorting: terbaru, terpopuler, termurah
- [ ] Card produk: thumbnail, nama, badge kategori, badge "Termasuk panduan hosting", harga, rating

#### Halaman Detail Produk
- [ ] Preview screenshot / video demo
- [ ] Deskripsi, fitur, tech stack
- [ ] Badge "Termasuk panduan hosting" (conditional)
- [ ] Section "Yang kamu dapatkan"
- [ ] Tab: Deskripsi, Review, FAQ, Changelog
- [ ] Produk terkait
- [ ] Tombol "Beli Sekarang" / "Tambah ke Cart"

#### Halaman Course
- [ ] Listing course dengan filter level & topik
- [ ] Card course: thumbnail, judul, episode count, durasi, level, harga
- [ ] Halaman detail course: deskripsi, silabus (modul & episode), preview episode gratis
- [ ] Tombol "Beli Course" / "Mulai Belajar" (jika sudah enrolled)

#### Halaman Custom Order
- [ ] Penjelasan layanan custom order
- [ ] Form brief: jenis produk, deskripsi, fitur utama, deadline, budget range, kontak
- [ ] Portofolio hasil custom order sebelumnya
- [ ] FAQ custom order
- [ ] CTA WhatsApp / email

#### Halaman About & Portofolio
- [ ] Cerita singkat Febri
- [ ] Tech stack dengan icon
- [ ] Project pilihan + link demo
- [ ] Link sosial media, GitHub, kontak

#### Halaman Statis
- [ ] FAQ umum
- [ ] Syarat & Ketentuan
- [ ] Kebijakan Privasi
- [ ] Kebijakan Refund
- [ ] Halaman Kontak

---

### 1.4 Belanja & Pembayaran

- [ ] Sistem cart (session-based atau DB-based)
- [ ] Halaman checkout dengan ringkasan pesanan
- [ ] Input kode kupon di checkout
- [ ] Integrasi **Xendit Invoice API** sebagai payment page
  - [ ] Install `xendit/xendit-php` SDK via Composer
  - [ ] Simpan `XENDIT_SECRET_KEY` & `XENDIT_WEBHOOK_SECRET` di `.env`
  - [ ] Buat `XenditService::createInvoice()` — generate Invoice Xendit dari backend
  - [ ] Redirect user ke Xendit Invoice URL setelah order dibuat
  - [ ] Xendit menangani semua metode bayar: QRIS, Virtual Account (BCA, BNI, BRI, Mandiri, Permata), E-Wallet (GoPay, OVO, Dana, ShopeePay), Kartu Kredit
- [ ] **Xendit Webhook handler** (`POST /payment/xendit/callback`)
  - [ ] Verifikasi `X-CALLBACK-TOKEN` header menggunakan `XENDIT_WEBHOOK_SECRET`
  - [ ] Update status order berdasarkan event: `PAID`, `EXPIRED`, `PENDING`
- [ ] Setelah pembayaran sukses:
  - [ ] Status order → `paid`
  - [ ] Generate license key unik per produk
  - [ ] Buat enrollment jika item adalah course
  - [ ] Kirim email konfirmasi pembayaran (queue)
- [ ] Halaman sukses & gagal / expired pembayaran

---

### 1.5 Sistem Download Produk Digital

- [ ] Halaman "Library" (semua produk yang sudah dibeli)
- [ ] Generate signed URL dinamis saat user klik download
- [ ] Signed URL expire setelah 2 jam
- [ ] Batas 3x download per lisensi (catat di tabel `downloads`)
- [ ] Tampilkan sisa download tersedia
- [ ] History download per produk

---

### 1.6 LMS — Sistem Course (YouTube Embed)

- [ ] Middleware `EnsureEnrolled` (cek enrollment sebelum akses halaman belajar)
- [ ] Halaman belajar:
  - [ ] Sidebar: daftar modul & episode + progress bar per modul
  - [ ] Area utama: YouTube iframe embed (via YouTube IFrame API)
  - [ ] YouTube video ID dimuat dari API internal (tidak tampil di HTML)
  - [ ] Parameter YouTube: `rel=0&modestbranding=1&controls=1`
- [ ] Tombol "Tandai Selesai" per episode (update `episode_progress`)
- [ ] Navigasi prev/next episode
- [ ] Deskripsi & resource per episode
- [ ] Tracking progress keseluruhan (tampil di dashboard user)
- [ ] API internal: `GET /api/episode/{id}/video` — return video ID hanya untuk user enrolled

---

### 1.7 Admin Panel — Dasar

#### Dashboard Admin
- [ ] Total pendapatan (hari ini, bulan ini, total)
- [ ] Pesanan masuk hari ini
- [ ] Member baru
- [ ] Custom order aktif
- [ ] Produk terlaris

#### Manajemen Produk
- [ ] CRUD produk digital (buat, edit, hapus, lihat)
- [ ] Upload thumbnail produk ke storage
- [ ] Upload file produk (zip dll.) ke storage
- [ ] Toggle "Termasuk panduan hosting"
- [ ] Set status: draft / published / archived
- [ ] Input versi produk + changelog

#### Manajemen Course
- [ ] CRUD course
- [ ] CRUD modul per course
- [ ] CRUD episode per modul (dengan input YouTube video ID)
- [ ] Set episode: preview gratis atau berbayar
- [ ] Lihat progress peserta per course

#### Manajemen Pesanan (Basic)
- [ ] List transaksi (pending, sukses, gagal)
- [ ] Detail transaksi dan data pembeli

#### Manajemen Custom Order (Basic)
- [ ] List pengajuan custom order
- [ ] Lihat detail form brief
- [ ] Update status order

#### Manajemen Pengguna (Basic)
- [ ] List member
- [ ] Lihat detail + riwayat pembelian

---

### 1.8 Notifikasi Email

- [ ] Setup Laravel Mail + Resend (production) / Mailtrap (dev)
- [ ] Email: verifikasi akun (via queue)
- [ ] Email: konfirmasi pembayaran berhasil (via queue)
- [ ] Email: notifikasi pengajuan custom order ke admin
- [ ] Email: reset password

---

## 📈 Phase 2 — Growth (Bulan 3–4)

> Tujuan: Fitur lengkap, admin panel powerful, SEO, pengalaman user lebih matang.

---

### 2.1 Custom Order Management — Lengkap

- [ ] Sistem status tracking order: `Masuk → Review → Negosiasi → Pengerjaan → Revisi → Selesai`
- [ ] Halaman detail order untuk user: timeline status, file, catatan revisi
- [ ] Sistem chat / komentar per order (antara Febri & pembeli)
  - [ ] Migration: `custom_order_messages`
  - [ ] Form kirim pesan + upload file
  - [ ] Notifikasi email tiap ada pesan baru
- [ ] Upload & download file serah terima per order
  - [ ] Migration: `custom_order_files`
- [ ] Admin: update status, tambah catatan, upload file
- [ ] Admin: tandai milestone pembayaran (DP & pelunasan)
- [ ] Email notifikasi ke pembeli saat status berubah

---

### 2.2 Layanan After-Sales (Add-on)

- [ ] Migration: `addon_services` (user_id, jenis, status, harga, order_id)
- [ ] Halaman "Tambah Layanan" di library user
- [ ] Pilih layanan: panduan hosting, penambahan fitur, kustomisasi tampilan, integrasi payment, setup database, maintenance
- [ ] Checkout & bayar via Xendit Invoice
- [ ] Admin: lihat & kelola permintaan layanan add-on
- [ ] Email konfirmasi jadwal ke pembeli

---

### 2.3 Review & Rating

- [ ] Form review di halaman detail produk (hanya pembeli terverifikasi)
- [ ] Rating bintang 1–5
- [ ] Tampilkan average rating & jumlah review di card & detail produk
- [ ] Admin: moderasi review (approve / hapus)

---

### 2.4 Kode Kupon & Diskon

- [ ] Admin: CRUD kupon (kode, tipe: persentase/nominal, nilai, max uses, expired_at)
- [ ] Admin: lihat statistik penggunaan kupon
- [ ] User: input kode kupon di checkout
- [ ] Validasi kupon: berlaku, tidak expired, belum habis kuota
- [ ] Tampilkan potongan harga di ringkasan checkout
- [ ] Catat penggunaan kupon per order

---

### 2.5 Sertifikat Otomatis (PDF)

- [ ] Trigger: user menyelesaikan semua episode course
- [ ] Generate PDF sertifikat via DomPDF
- [ ] Isi sertifikat: nama peserta, judul course, tanggal selesai, nomor unik
- [ ] Simpan file sertifikat ke storage
- [ ] Halaman unduh sertifikat di dashboard user
- [ ] Admin: lihat daftar sertifikat yang diterbitkan

---

### 2.6 Invoice PDF

- [ ] Generate invoice PDF setelah pembayaran sukses (DomPDF)
- [ ] Isi invoice: nomor invoice, detail produk, harga, pajak, total, info pembeli
- [ ] Tersedia di halaman riwayat pesanan user
- [ ] Admin: unduh invoice dari panel pesanan

---

### 2.7 Admin Panel — Lengkap

- [ ] Manajemen Pengguna: suspend / aktifkan akun, tambah catatan
- [ ] Manajemen Pesanan: filter status, search, export CSV
- [ ] Manajemen Kupon: CRUD lengkap + statistik
- [ ] Pengaturan Website:
  - [ ] Info umum (nama brand, tagline, kontak, sosmed, WhatsApp)
  - [ ] Pengaturan Xendit (`XENDIT_SECRET_KEY`, `XENDIT_WEBHOOK_SECRET`)
  - [ ] Pengaturan SMTP / Resend
  - [ ] Template email notifikasi (editable)
- [ ] Dashboard admin: chart pendapatan (Chart.js / ApexCharts)

---

### 2.8 SEO & Analytics

- [ ] Meta title & meta description per halaman (Blade layout)
- [ ] Open Graph tags per halaman & per produk (thumbnail, deskripsi)
- [ ] Canonical URL
- [ ] Sitemap otomatis (`spatie/laravel-sitemap` atau custom)
- [ ] robots.txt
- [ ] Integrasi Google Analytics (GA4)
- [ ] Schema.org structured data untuk produk & course

---

### 2.9 Fitur Pendukung

- [ ] Tombol WhatsApp floating (dengan pesan preset untuk custom order & layanan)
- [ ] Review & Rating (lihat 2.3)
- [ ] Wishlist: simpan & hapus produk dari wishlist
- [ ] Tampilkan wishlist di dashboard user

---

## 🌐 Phase 3 — Scale (Bulan 5+)

> Tujuan: Pertumbuhan organik, ekspansi fitur, skalabilitas.

---

### 3.1 Notifikasi Update Produk

- [ ] Admin: buat versi baru produk + changelog
- [ ] Notifikasi otomatis ke semua pembeli produk tersebut (email + in-app)
- [ ] Badge "Ada update" di library user
- [ ] User bisa download versi terbaru (reset signed URL)

---

### 3.2 Affiliate / Referral System

- [ ] Setiap user mendapat referral code unik
- [ ] Tracking: siapa yang daftar / beli via referral code
- [ ] Hitung komisi referral (persentase dari penjualan)
- [ ] Dashboard referral di akun user (total klik, pendaftaran, komisi)
- [ ] Admin: kelola & disbursement komisi referral

---

### 3.3 Newsletter

- [ ] Form newsletter di beranda
- [ ] Simpan subscriber ke database
- [ ] Integrasi dengan email service (Resend broadcast)
- [ ] Admin: kirim newsletter ke semua subscriber
- [ ] Link unsubscribe di footer email

---

### 3.4 Multi-Bahasa (ID & EN)

- [ ] Setup Laravel Localization
- [ ] Terjemahkan semua teks UI ke Bahasa Inggris
- [ ] Language switcher di navbar
- [ ] SEO hreflang tag

---

### 3.5 Halaman Portofolio Custom Order

- [ ] Admin: input hasil custom order ke portofolio (nama klien, deskripsi, screenshot, link demo)
- [ ] Halaman publik: galeri portofolio custom order
- [ ] Filter portofolio by kategori (website, mobile, dashboard, dll.)

---

### 3.6 Peningkatan Keamanan & Performa

- [ ] Rate limiting: login, checkout, download, API video
- [ ] Log aktivitas download & akses course
- [ ] Implementasi Redis untuk session & cache
- [ ] Optimasi query dengan eager loading (mencegah N+1)
- [ ] Image optimization (lazy loading, WebP)
- [ ] CDN untuk asset statis
- [ ] Monitoring error (Sentry)

---

## 🔒 Checklist Keamanan (Cross-Phase)

> Pastikan semua item ini selesai sebelum production launch.

- [ ] File produk tidak bisa diakses langsung via URL (hanya via signed URL)
- [ ] ID video YouTube tidak tampil di HTML frontend
- [ ] Middleware `EnsureEnrolled` aktif di semua route halaman belajar
- [ ] Middleware `IsAdmin` aktif di semua route admin
- [ ] Rate limiting aktif di: login, register, checkout, download, API video
- [ ] CSRF protection aktif (bawaan Laravel)
- [ ] Semua input form divalidasi server-side (Form Request)
- [ ] Password di-hash dengan bcrypt
- [ ] Signed URL download expire setelah 2 jam, maks 3x download per lisensi
- [ ] Webhook Xendit diverifikasi dengan `X-CALLBACK-TOKEN` header
- [ ] Env production tidak expose ke publik (`.env` di `.gitignore`)
- [ ] HTTPS wajib aktif (SSL via Let's Encrypt)
- [ ] Admin panel di route terpisah dengan prefix `/admin`

---

## 🚢 Checklist Pre-Launch

- [ ] Semua halaman MVP berjalan tanpa error
- [ ] Xendit ditest dengan mode **test API key** → lalu switch ke live API key
- [ ] Email notifikasi semua template berjalan
- [ ] Signed URL download berfungsi & expire dengan benar
- [ ] YouTube embed hanya bisa diakses user enrolled
- [ ] Mobile responsive semua halaman (test di beberapa device)
- [ ] Semua image punya alt text
- [ ] Favicon + meta OG image terpasang
- [ ] Google Analytics terpasang & tracking berjalan
- [ ] Backup database sebelum go-live
- [ ] Setup monitoring server (UptimeRobot / betterstack)

---

## 📊 Ringkasan Phase

| Phase | Fokus | Estimasi Durasi | Target |
|-------|-------|-----------------|--------|
| **Phase 0** | Setup & Foundation | 3–5 hari | Dev environment siap |
| **Phase 1** | MVP | 6–8 minggu | Bisa jual produk & course |
| **Phase 2** | Growth | 6–8 minggu | Admin lengkap, SEO, fitur lanjut |
| **Phase 3** | Scale | Ongoing | Pertumbuhan & skalabilitas |

---

*Todolist ini dibuat berdasarkan Project Brief Codeafebri v2.0. Update seiring perkembangan proyek.*
