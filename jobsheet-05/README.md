# Jobsheet 5 — JavaScript DOM & Event

- **Nama:** Juan Madhy
- **NIM:** 254107060050
- **Mata Kuliah:** Desain dan Pemrograman Web

Sub-CPMK: Menerapkan manipulasi DOM & event JavaScript.

## Deskripsi Jobsheet
Pada Jobsheet 5 ini, aplikasi SIMPUS-Mini mulai ditambahkan lapisan interaktivitas berbasis JavaScript di sisi client (DOM manipulation & event listener) murni di browser tanpa reload halaman.

## Perubahan dari Jobsheet 4
- Menambahkan file `assets/js/app.js` dan menghubungkannya ke seluruh halaman HTML.
- **Hamburger Menu**: Mengganti checkbox hack dengan tombol interaktif (`#nav-toggle-btn`) yang dikontrol melalui event `click` JavaScript.
- **Validasi Form**: Menerapkan validasi form client-side pada form Tambah Buku dan Tambah Anggota (`id="form-tambah"`) dengan menampilkan pesan error inline.
- **Filter Tabel**: Menambahkan kolom pencarian real-time (`#search-input`) di atas tabel buku dan anggota untuk menyaring baris saat mengetik (event `keyup`).
- **Konfirmasi Hapus**: Menambahkan tombol `.btn-hapus` yang menampilkan popup `confirm()` sebelum menghapus baris tabel dari DOM.

## Struktur Folder
```
jobsheet-05/
├── index.html
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── fonts/
│   └── js/
│       └── app.js
├── buku/
│   ├── list.html
│   └── tambah.html
├── anggota/
│   ├── list.html
│   └── tambah.html
├── docs/
│   └── wireframe.md
├── Infografis.png
└── README.md
```

## Cara Menjalankan
Buka file `index.html` langsung di browser.
- Buka tampilan mobile dan klik menu hamburger untuk membuka navigasi.
- Buka `buku/list.html` atau `anggota/list.html`, coba cari data di kolom pencarian atau klik tombol Hapus.
- Buka `buku/tambah.html` atau `anggota/tambah.html`, coba klik Simpan saat form kosong atau saat input tahun/stok tidak valid untuk melihat pesan error.
