<?php
// includes/header.php
// "Komponen" pembuka: <head>, navbar, dan tag <main>.
// Ditutup oleh includes/footer.php — WAJIB dipakai berpasangan.

session_start();

/*
 * $base = prefix path relatif ke root proyek, dihitung otomatis.
 * Root (index.php)          -> ''      (kosong)
 * Satu level (produk/x.php) -> '../'
 * Dua level                 -> '../../'
 *
 * Tujuannya: link & asset tetap benar walau proyek diakses nested
 * di subfolder (mis. localhost/kuliah/jobsheet-06/).
 */
$__root      = dirname(__DIR__);                          // folder proyek (induk dari includes/)
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);      // folder file yang sedang diakses
$__rel       = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__root))), '/');
$base        = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);

// Judul halaman: bisa "di-pass" dari halaman pemanggil sebelum include.
// Contoh: <?php $page_title = 'Dashboard'; include __DIR__ . '/includes/header.php'; ?>
$page_title = $page_title ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafePOS<?php echo $page_title ? ' | ' . htmlspecialchars($page_title) : ''; ?></title>
    <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"SF Pro Display"', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-black text-stone-100">
    <header class="relative isolate border-b border-white/10
                   before:absolute before:inset-0 before:-z-10 before:bg-white/5 before:backdrop-blur-md
                   p-2 px-4 mb-6 flex flex-row justify-between sticky top-0 z-50">

        <h1 class="text-2xl font-bold">
            <a href="<?php echo $base; ?>index.php">
                <span class="text-emerald-300">Cafe</span>
                <span class="text-orange-500">/</span>
                POS
            </a>
        </h1>
        <nav class="relative flex items-center">
            <ul class="hidden md:flex space-x-4 mt-1">
                <li class="hover:text-orange-500 transition-colors duration-200"><a href="<?php echo $base; ?>index.php">Dashboard</a></li>
                <li class="hover:text-orange-500 transition-colors duration-200"><a href="<?php echo $base; ?>kasir/index.php">Kasir</a></li>
                <li class="hover:text-orange-500 transition-colors duration-200"><a href="<?php echo $base; ?>produk/list.php">Produk</a></li>
                <li class="hover:text-orange-500 transition-colors duration-200"><a href="<?php echo $base; ?>kategori/list.php">Kategori</a></li>
                <li class="hover:text-orange-500 transition-colors duration-200"><a href="<?php echo $base; ?>transaksi/list.php">Riwayat</a></li>
            </ul>

            <button type="button" id="nav-toggle-btn" class="md:hidden text-2xl cursor-pointer select-none focus-visible:outline focus-visible:outline-emerald-300 bg-transparent border-none text-stone-100" aria-label="Menu" aria-controls="mobile-nav">☰</button>

            <ul id="mobile-nav" class="fixed inset-y-0 right-0 w-1/2
                       translate-x-full invisible
                       md:hidden flex flex-col gap-6 p-6 text-right
                       transition-all duration-300 z-40 top-10 border border-white/40 rounded-l-3xl backdrop-blur-sm bg-white/[0.05] shadow-lg">
                <li class="hover:text-orange-500 transition-all duration-200 font-bold"><a href="<?php echo $base; ?>index.php">Dashboard</a></li>
                <li class="hover:text-orange-500 transition-all duration-200 font-bold"><a href="<?php echo $base; ?>kasir/index.php">Kasir</a></li>
                <li class="hover:text-orange-500 transition-all duration-200 font-bold"><a href="<?php echo $base; ?>produk/list.php">Produk</a></li>
                <li class="hover:text-orange-500 transition-all duration-200 font-bold"><a href="<?php echo $base; ?>kategori/list.php">Kategori</a></li>
                <li class="hover:text-orange-500 transition-all duration-200 font-bold"><a href="<?php echo $base; ?>transaksi/list.php">Riwayat</a></li>
            </ul>
        </nav>
    </header>

    <main class="p-8 flex flex-col min-h-screen items-center w-full">
