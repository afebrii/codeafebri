# Project Brief — Codeafebri

**Versi:** 2.0  
**Tanggal:** April 2026  
**Pemilik Proyek:** Febri  
**Status:** Draft

---

## 1. Ringkasan Proyek

Codeafebri adalah platform digital personal milik Febri yang menjual produk digital (template website dan aplikasi mobile), menerima order custom, memberikan layanan panduan hosting & penambahan fitur pasca-pembelian, serta menyediakan kursus online berbasis project. Website ini sekaligus berfungsi sebagai portofolio profesional dan bukti nyata kemampuan teknis sang pemilik.

**Tagline:** *Build real projects. Ship real products.*

---

## 2. Tech Stack

| Layer | Teknologi |
|---|---|
| Backend framework | Laravel 11 |
| Frontend styling | Tailwind CSS v3 |
| JavaScript interaktif | Alpine.js v3 |
| Database | MySQL 8 |
| Storage file | Laravel Storage + S3-compatible (Cloudflare R2 / Wasabi) |
| Auth | Laravel Breeze |
| Payment | Midtrans (QRIS, transfer bank, e-wallet, kartu kredit) |
| Video course | YouTube embed (unlisted) via YouTube iframe API |
| Email | Laravel Mail + Resend (production) |
| Deploy | VPS (Niagahoster / DigitalOcean) + Nginx + SSL |
| Queue | Laravel Queue + Redis |
| PDF generate | DomPDF (invoice & sertifikat) |

---

## 3. Color Palette & Design System

### 3.1 Filosofi Visual

**Tema:** Dark mode utama dengan aksen kuning yang bold dan energetik.  
**Kesan:** Profesional, modern, percaya diri — cocok untuk brand developer.  
**Font:** Heading pakai font geometric (Sora / Plus Jakarta Sans), body pakai Inter atau DM Sans.

---

### 3.2 Palet Warna

#### Primary — Kuning (Yellow)

| Token | Hex | Kegunaan |
|---|---|---|
| `primary-50` | `#FEF9C3` | Background badge, highlight ringan |
| `primary-300` | `#FDE047` | Hover state, aksen ringan |
| `primary-500` | `#EAB308` | **Warna utama** — tombol, link aktif, aksen |
| `primary-600` | `#CA8A04` | Hover tombol primary |
| `primary-800` | `#854D0E` | Teks di atas background kuning terang |

#### Dark / Background

| Token | Hex | Kegunaan |
|---|---|---|
| `dark-950` | `#0C0A09` | Background terdalam, navbar sticky |
| `dark-900` | `#1C1917` | **Background utama body** |
| `dark-800` | `#292524` | Background card, sidebar |
| `dark-700` | `#44403C` | Border card, divider |
| `dark-600` | `#57534E` | Border hover |

#### Neutral — Teks

| Token | Hex | Kegunaan |
|---|---|---|
| `neutral-100` | `#F5F5F4` | **Teks heading utama** |
| `neutral-300` | `#D6D3D1` | Teks body |
| `neutral-500` | `#A8A29E` | Teks muted / placeholder |
| `neutral-600` | `#78716C` | Teks hint, label form |

#### Semantic

| Token | Hex | Kegunaan |
|---|---|---|
| `success` | `#22C55E` | Pembayaran sukses, badge aktif |
| `info` | `#3B82F6` | Notifikasi info, badge course |
| `warning` | `#F97316` | Peringatan, badge pending |
| `danger` | `#EF4444` | Error, tombol hapus |

---

### 3.3 Token CSS (Tailwind Config)

```js
// tailwind.config.js
theme: {
  extend: {
    colors: {
      primary: {
        50:  '#FEF9C3',
        300: '#FDE047',
        500: '#EAB308',
        600: '#CA8A04',
        800: '#854D0E',
      },
      dark: {
        950: '#0C0A09',
        900: '#1C1917',
        800: '#292524',
        700: '#44403C',
        600: '#57534E',
      },
      neutral: {
        100: '#F5F5F4',
        300: '#D6D3D1',
        500: '#A8A29E',
        600: '#78716C',
      },
    },
    fontFamily: {
      heading: ['Sora', 'Plus Jakarta Sans', 'sans-serif'],
      body: ['DM Sans', 'Inter', 'sans-serif'],
      mono: ['JetBrains Mono', 'Fira Code', 'monospace'],
    },
  },
}
```

---

### 3.4 Panduan Penggunaan Warna

- **Tombol primary:** `bg-primary-500 text-dark-950 hover:bg-primary-600`
- **Tombol outline:** `border border-primary-500 text-primary-500 hover:bg-primary-500/10`
- **Card:** `bg-dark-800 border border-dark-700 rounded-xl`
- **Badge produk:** `bg-primary-50 text-primary-800` (light) atau `bg-dark-700 text-primary-300` (dark)
- **Link aktif:** `text-primary-500`
- **Teks heading:** `text-neutral-100`
- **Teks body:** `text-neutral-300`
- **Teks muted:** `text-neutral-500`

---

## 4. Target Pengguna

- **Pelajar & mahasiswa** yang ingin belajar web/mobile development dari project nyata
- **Freelancer junior** yang butuh template atau aplikasi siap pakai untuk dimodifikasi ke klien
- **Pemilik bisnis / UMKM** yang ingin punya website/aplikasi custom tanpa harus coding sendiri
- **Developer independen** yang ingin shortcut dengan membeli source code berkualitas

---

## 5. Produk & Layanan yang Dijual

### 5.1 Template Website (Produk Digital)

Source code website siap pakai — landing page, dashboard, toko online, company profile — berbasis Laravel, HTML/CSS, atau React. Pembeli mendapat akses download setelah pembayaran berhasil.

**Yang didapat pembeli:**
- Source code lengkap
- Dokumentasi instalasi
- **Panduan hosting step-by-step** (cara deploy ke VPS/shared hosting)
- Akses ke fitur penambahan / kustomisasi berbayar (layanan add-on)

---

### 5.2 Aplikasi Mobile (Produk Digital)

Source code aplikasi Flutter atau React Native lengkap.

**Yang didapat pembeli:**
- Source code + dokumentasi setup
- Panduan build & deploy ke Google Play Store / App Store
- Layanan penambahan fitur custom (opsional, berbayar terpisah)

---

### 5.3 Custom Order (Jasa / Layanan)

Pembeli bisa memesan website atau aplikasi mobile sesuai kebutuhan mereka dari nol.

**Alur custom order:**
1. Pembeli mengisi form brief (jenis produk, fitur yang dibutuhkan, deadline, budget)
2. Febri review dan kirim estimasi harga + timeline via WhatsApp / email
3. Pembeli setuju → bayar DP 50%
4. Proses pengerjaan dengan update berkala
5. Revisi (sesuai paket)
6. Pelunasan → serah terima source code
7. **Panduan hosting & deployment** termasuk dalam paket

**Kategori custom order:**
- Website profile / landing page
- Website toko online (dengan sistem kasir / payment)
- Sistem manajemen internal (inventory, absensi, dll.)
- Aplikasi mobile Android / iOS
- Dashboard admin / monitoring

---

### 5.4 Layanan After-Sales (Add-on Berbayar)

Tersedia untuk pembeli produk template maupun custom order.

| Layanan | Deskripsi |
|---|---|
| Panduan hosting | Sesi 1-on-1 via Google Meet, guide pembeli deploy ke server pilihan |
| Penambahan fitur | Request fitur baru di luar source code asal |
| Kustomisasi tampilan | Ubah warna, font, layout, logo sesuai brand pembeli |
| Integrasi payment | Pasang payment gateway (Midtrans, Xendit, dll.) |
| Setup database | Migrasi data, konfigurasi koneksi production |
| Maintenance bulanan | Update dependensi, backup, monitoring error |

---

### 5.5 Course Berbasis Project

Kursus video dengan pendekatan project-based — setiap modul menghasilkan fitur atau produk nyata yang bisa langsung dipakai di portofolio. Level pemula hingga lanjut.

**Sumber video:** YouTube (Unlisted)  
Video course di-embed menggunakan YouTube Iframe API. Video di-set **unlisted** sehingga tidak muncul di pencarian YouTube dan hanya bisa diakses dari halaman course Codeafebri (bukan dari link YouTube langsung).

**Mekanisme keamanan YouTube embed:**
- URL video YouTube tidak ditampilkan di frontend (disimpan di database, dimuat via API internal)
- YouTube Iframe API diinisialisasi dari backend, bukan hardcode di HTML
- Halaman course hanya bisa diakses user yang sudah membeli (auth + enrollment check)

**Yang didapat peserta:**
- Akses video course seumur hidup
- Source code project per modul
- Akses forum diskusi per episode
- Sertifikat otomatis saat semua episode selesai (PDF)

---

## 6. Fitur yang Harus Ada

### 6.1 Halaman Publik (tanpa login)

#### Beranda (Home)
- Hero section: tagline, subtitle, CTA ("Lihat Produk" & "Mulai Belajar")
- Highlight 4 kategori produk: Website, Mobile, Custom Order, Course
- Produk unggulan (featured products)
- Statistik brand: total produk, member, course, project terselesaikan
- Testimoni pembeli & peserta course
- Section "Cara kerja" — alur beli produk & custom order
- CTA newsletter

#### Halaman Produk (Marketplace)
- Listing produk dengan filter: kategori (Website / Mobile / Course), harga, tech stack
- Search produk
- Card produk: thumbnail, nama, badge kategori, badge "Termasuk panduan hosting", harga, rating
- Sorting: terbaru, terpopuler, termurah

#### Halaman Detail Produk
- Preview screenshot / video demo (autoplay muted)
- Deskripsi, fitur yang didapat, tech stack
- **Badge "Termasuk panduan hosting"** jika berlaku
- **Section "Yang kamu dapatkan":** source code, dokumentasi, panduan hosting, akses update
- Tab: deskripsi, review, FAQ, changelog
- Produk terkait

#### Halaman Custom Order
- Penjelasan layanan custom order
- Form brief: jenis produk, deskripsi kebutuhan, fitur utama, deadline, budget range, kontak (WhatsApp/email)
- Portofolio hasil custom order sebelumnya
- FAQ custom order (estimasi harga, waktu pengerjaan, revisi)
- CTA WhatsApp / email langsung

#### Halaman Course
- Listing course dengan filter: level (pemula / menengah / lanjut), topik
- Card course: thumbnail, judul, jumlah episode, durasi total, level, harga
- Halaman detail course: deskripsi, silabus (daftar modul & episode), preview episode gratis

#### Halaman Portofolio & About
- Cerita singkat Febri
- Tech stack yang dikuasai (dengan icon)
- Project pilihan + link demo
- Link sosial media, GitHub, kontak

#### Halaman Statis
- FAQ umum
- Syarat & Ketentuan
- Kebijakan Privasi
- Kebijakan Refund
- Kontak

---

### 6.2 Auth & Akun Pengguna

- Registrasi (email + password), login, logout
- Lupa password & reset password
- Verifikasi email
- Profil: edit nama, foto, password, nomor WhatsApp
- Dashboard user: ringkasan pembelian, course aktif, custom order

---

### 6.3 Belanja & Pembayaran

- Keranjang belanja (cart)
- Checkout dengan ringkasan pesanan
- Kode kupon / diskon
- Integrasi Midtrans (QRIS, transfer bank, kartu kredit, GoPay, OVO)
- Webhook pembayaran Midtrans
- Email konfirmasi otomatis setelah pembayaran sukses
- Akses produk otomatis setelah pembayaran sukses
- Sistem lisensi — setiap pembelian menghasilkan license key unik
- Invoice PDF yang bisa diunduh

---

### 6.4 Sistem Download Produk Digital

- Halaman "Library" — semua produk yang sudah dibeli
- Tombol download menghasilkan signed URL dinamis (bukan URL statis)
- Link download expire setelah beberapa jam
- Batas jumlah download per lisensi
- Notifikasi jika ada versi update produk
- History download per produk

---

### 6.5 LMS (Sistem Course) — YouTube Embed

#### Halaman Belajar
- Sidebar: daftar modul dan episode, progress bar per modul
- Area utama: YouTube iframe player (video unlisted, embedded aman)
- Tombol "Tandai selesai" per episode
- Navigasi prev/next episode
- Deskripsi dan resource per episode (link, file tambahan)

#### Keamanan Video YouTube
- ID video YouTube disimpan di database, tidak di-hardcode di HTML
- Halaman course hanya bisa diakses user yang enrolled (middleware `EnsureEnrolled`)
- Tidak ada link langsung ke YouTube yang ditampilkan ke user
- Tombol download pada iframe dinonaktifkan via parameter YouTube (`rel=0&modestbranding=1&controls=1`)

#### Progress & Sertifikat
- Tracking progress per episode (ditandai selesai)
- Progress keseluruhan ditampilkan di dashboard user
- Sertifikat otomatis di-generate (PDF via DomPDF) saat course 100% selesai
- Sertifikat berisi: nama peserta, judul course, tanggal selesai, nomor sertifikat unik

---

### 6.6 Custom Order Management

#### Untuk Pembeli
- Form pengajuan custom order di halaman publik
- Status tracking order: `Masuk → Review → Negosiasi → Pengerjaan → Revisi → Selesai`
- Halaman detail order: timeline, file serah terima, catatan revisi
- Chat / komentar per order (antara Febri dan pembeli)

#### Untuk Admin (Febri)
- Notifikasi email setiap ada pengajuan custom order baru
- List semua custom order dengan status
- Update status order, tambah catatan, upload file
- Tandai milestone pembayaran (DP dan pelunasan)

---

### 6.7 Admin Panel

#### Dashboard
- Total pendapatan (hari ini, bulan ini, total)
- Pesanan masuk hari ini
- Member baru
- Custom order aktif
- Produk terlaris

#### Manajemen Produk
- CRUD produk digital
- Upload file produk ke storage
- Toggle "Termasuk panduan hosting"
- Set status: draft / published / archived
- Versi produk dan changelog

#### Manajemen Course
- CRUD course, modul, episode
- Input URL YouTube (ID video) per episode
- Set episode: preview gratis atau berbayar
- Lihat progress peserta per course

#### Manajemen Custom Order
- List semua pengajuan
- Update status dan milestone
- Upload file hasil pengerjaan
- Catat DP dan pelunasan

#### Manajemen Pesanan
- List transaksi (pending, sukses, gagal, refund)
- Detail transaksi dan data pembeli
- Export CSV

#### Manajemen Pengguna
- List member, detail, riwayat pembelian
- Suspend / aktifkan akun

#### Manajemen Kupon
- CRUD kupon (persentase / nominal)
- Batas penggunaan, tanggal kadaluarsa
- Statistik penggunaan

#### Pengaturan Website
- Info umum: nama brand, tagline, kontak, sosial media, nomor WhatsApp
- Pengaturan Midtrans (API key)
- Pengaturan SMTP
- Template email notifikasi

---

### 6.8 Fitur Pendukung

- Review & rating produk (hanya pembeli)
- Wishlist / simpan produk
- Tombol WhatsApp floating (hubungi langsung untuk custom order / layanan add-on)
- SEO: meta title, meta description, Open Graph per halaman/produk
- Sitemap otomatis
- Google Analytics
- Halaman 404 & 500 custom

---

## 7. Arsitektur Database (Ringkasan)

| Tabel | Keterangan |
|---|---|
| `users` | Data pengguna dan admin |
| `products` | Produk digital (website & mobile) |
| `product_files` | File yang bisa didownload per produk |
| `product_versions` | Versi dan changelog produk |
| `courses` | Data course |
| `modules` | Modul / bab dalam course |
| `episodes` | Episode per modul (simpan YouTube video ID) |
| `enrollments` | Relasi user ↔ course yang dibeli |
| `episode_progress` | Progress tonton per episode per user |
| `certificates` | Sertifikat yang digenerate |
| `orders` | Data transaksi / pesanan |
| `order_items` | Item per pesanan |
| `licenses` | License key per pembelian produk |
| `downloads` | Log download per lisensi |
| `custom_orders` | Pengajuan & data custom order |
| `custom_order_messages` | Chat / komentar per custom order |
| `custom_order_files` | File serah terima per custom order |
| `addon_services` | Layanan after-sales yang dibeli |
| `coupons` | Data kupon diskon |
| `reviews` | Review & rating produk |
| `wishlists` | Produk yang disimpan user |

---

## 8. Alur Utama Pengguna

### Beli Produk Digital
```
Lihat produk → Detail produk → Tambah ke cart → Checkout
→ Bayar via Midtrans → Konfirmasi sukses → Email notifikasi
→ Akses library → Download file → Akses panduan hosting
```

### Beli & Ikuti Course
```
Lihat course → Detail course → Beli → Bayar
→ Akses halaman belajar → Tonton episode (YouTube embed)
→ Tandai selesai → Selesaikan semua episode → Download sertifikat
```

### Custom Order
```
Halaman custom order → Isi form brief → Submit
→ Febri review → Kirim estimasi → Pembeli setuju
→ Bayar DP → Pengerjaan → Update berkala
→ Revisi → Pelunasan → Serah terima + panduan hosting
```

### Layanan Add-on (After-Sales)
```
Pembeli di library → Klik "Tambah layanan"
→ Pilih layanan (hosting, fitur, kustomisasi)
→ Bayar → Konfirmasi jadwal dengan Febri
→ Sesi / pengerjaan → Selesai
```

---

## 9. Fase Pengembangan

### Fase 1 — MVP (1–2 bulan)
- Setup Laravel, auth, admin panel dasar
- CRUD produk, course, modul, episode (dengan input YouTube video ID)
- Halaman publik: beranda, listing, detail produk, detail course
- Integrasi Midtrans + webhook
- Sistem download dengan signed URL
- Halaman belajar dengan YouTube embed (middleware enrollment)
- Tracking progress episode
- Halaman profil, library, dan dashboard user
- Halaman custom order + form pengajuan
- Email notifikasi dasar

### Fase 2 — Growth (bulan 3–4)
- Manajemen custom order lengkap (status, chat, file serah terima)
- Layanan add-on / after-sales
- Review & rating
- Kode kupon dan diskon
- Sertifikat otomatis (PDF)
- Invoice PDF
- Dashboard admin lengkap
- SEO optimization, sitemap
- Tombol WhatsApp floating

### Fase 3 — Scale (bulan 5+)
- Notifikasi update versi produk
- Affiliate / referral system
- Newsletter terintegrasi
- Wishlist
- Halaman portofolio project custom
- Multi-bahasa (ID & EN)

---

## 10. Keamanan

- File produk tidak bisa diakses langsung via URL — hanya via signed URL yang expire
- ID video YouTube tidak ditampilkan di frontend, disimpan di database
- Halaman course hanya bisa diakses user yang enrolled (middleware)
- Rate limiting pada endpoint login, checkout, dan download
- Validasi server-side semua input form
- CSRF protection aktif (bawaan Laravel)
- Password di-hash dengan bcrypt
- Admin panel di route terpisah dengan middleware `IsAdmin`
- Log aktivitas download dan akses course
- Signed URL download expire setelah 2 jam, maksimal 3x download per lisensi

---

## 11. Estimasi Halaman

| Jenis | Jumlah |
|---|---|
| Halaman publik | ~14 halaman |
| Halaman auth | ~6 halaman |
| Dashboard user | ~10 halaman |
| Halaman belajar (LMS) | ~3 template |
| Halaman custom order (user) | ~4 halaman |
| Admin panel | ~18 halaman |
| **Total** | **~55 halaman** |

---

## 12. Referensi Inspirasi

- [Gumroad](https://gumroad.com) — model jual produk digital + custom order
- [Laracasts](https://laracasts.com) — platform course Laravel dengan YouTube embed
- [Codewithstein](https://codewithstein.com) — personal brand developer
- [Envato / ThemeForest](https://themeforest.net) — marketplace template dengan rating & review

---

*Brief ini bersifat hidup dan akan diperbarui seiring perkembangan proyek. Versi 2.0 menambahkan: color palette, layanan custom order, panduan hosting & add-on after-sales, dan implementasi YouTube embed untuk course.*
