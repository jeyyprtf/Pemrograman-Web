<?php
$page_title = 'Dashboard';
include __DIR__ . '/includes/header.php';
?>
        <section class="max-w-2xl pb-16 flex flex-col items-center">
            <p class="text-lg text-orange-500 text-center">Halo!</p>
            <h2 class="text-5xl py-2 font-bold text-center">Selamat Datang di Sistem <span class="text-emerald-300">Perpustakaan  Mini</span></h2>
            <p class="text-xl text-center w-[60%] font-medium text-neutral-200">Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.</p>
        </section>

        <section class="flex flex-col center items-center w-full">
            <div class="glow-edge-2 rounded-3xl p-6 w-full max-w-7xl flex flex-col
                        border border-white/40 backdrop-blur-sm bg-white/[0.05] shadow-lg">
                <div class="w-full flex items-center justify-center mb-8">
                    <h2 class="text-3xl font-bold">Ringkasan</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-center ">    
                    <article class="border border-neutral-700 rounded-3xl p-4 bg-zinc-900/60 hover:border-emerald-500 transition duration-200 font-bold">
                        <h3>Total Buku</h3>
                        <p>12</p>
                    </article>
                    <article class="border border-neutral-700 rounded-3xl p-4 bg-zinc-900/60 hover:border-emerald-500 transition duration-200 font-bold">
                        <h3>Total Anggota</h3>
                        <p>8</p>
                    </article>
                    <article class="border border-neutral-700 rounded-3xl p-4 bg-zinc-900/60 hover:border-emerald-500 transition duration-200 font-bold">
                        <h3>Sedang Dipinjam</h3>
                        <p>3</p>
                    </article>
                </div>
            </div>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>
