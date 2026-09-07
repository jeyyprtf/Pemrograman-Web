# Jobsheet 3 — Responsive Design

- **Nama:** Juan Madhy
- **NIM:** 254107060050
- **Mata Kuliah:** Desain dan Pemrograman Web

Sub-CPMK: Membangun tampilan responsif.

## Perubahan dari Jobsheet 2
1. **Meta Viewport**: Menambahkan `<meta name="viewport" content="width=device-width, initial-scale=1">` pada seluruh halaman HTML agar browser mobile tidak menskalakan tampilan ke default desktop (980px).
2. **Hamburger Menu (Checkbox Hack)**: Menggunakan teknik murni CSS (`#nav-toggle:checked ~ nav`) untuk menampilkan dan menyembunyikan navigasi di layar kecil (≤480px) tanpa JavaScript.
3. **Tabel Responsif**: Membungkus elemen `<table>` di halaman Daftar Buku dan Daftar Anggota dengan `<div class="table-responsive">` yang memiliki properti `overflow-x: auto` agar tidak merusak layout pada layar sempit.
4. **CSS Media Queries**:
   - **Breakpoint ≤768px (Tablet)**: Grid kartu ringkasan statistik berubah dari 3 kolom menjadi 2 kolom.
   - **Breakpoint ≤480px (Mobile)**: Grid kartu ringkasan statistik berubah menjadi 1 kolom vertikal, menu navigasi disembunyikan di balik ikon hamburger (☰), dan input/select form disesuaikan menjadi lebar 100%.
5. **Konsistensi Desain**: Tetap mempertahankan style dark mode yang sudah dikembangkan sebelumnya.

## Struktur Folder
```
jobsheet-03/
├── index.html
├── assets/
│   └── css/
│       └── style.css
├── buku/
│   ├── list.html
│   └── tambah.html
├── anggota/
│   ├── list.html
│   └── tambah.html
└── README.md
```

## Cara Menjalankan & Menguji
1. Buka salah satu file `.html` (misalnya `index.html`) di browser (Chrome / Edge / Firefox).
2. Buka **Developer Tools** (`F12` atau `Ctrl + Shift + I`).
3. Aktifkan **Toggle Device Toolbar** (`Ctrl + Shift + M`).
4. Uji pada 3 ukuran layar:
   - **Desktop (≥1024px)**: Menu navigasi horizontal terbuka, kartu statistik berjajar 3 kolom.
   - **Tablet (≤768px)**: Kartu statistik berjajar 2 kolom.
   - **Mobile (≤480px)**: Menu navigasi berganti ikon hamburger ☰ (klik untuk buka/tutup menu), kartu statistik menjadi 1 kolom, tabel data dapat digeser horizontal jika melebihi lebar layar.
