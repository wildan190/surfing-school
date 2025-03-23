<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Ossy Surf School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Ossy Surf School</a>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-500">Beranda</a>
                <a href="#program" class="hover:text-blue-500">Program</a>
                <a href="#gallery" class="hover:text-blue-500">Gallery</a>
                <a href="#contact" class="hover:text-blue-500">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative w-full h-screen min-h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('/assets/img/hero.jpg');">

        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                Tingkatkan Keahlian Anda, <br>
                <span class="text-blue-400" id="auto-typing"></span>
            </h1>
            <p class="text-lg mt-4 max-w-2xl mx-auto">
                Bergabunglah dengan kami dan raih masa depan yang lebih cerah dengan program pendidikan berkualitas.
            </p>
            <a href="#contact"
                class="mt-6 inline-block bg-blue-500 px-8 py-3 rounded-full text-white text-lg shadow-lg hover:bg-blue-600 transition duration-300">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <!-- Auto-Typing Effect -->
    <script>
        const textArray = ["Dapatkan Sertifikasi Resmi", "Belajar dari Ahli", "Wujudkan Karier Impian!"];
        let index = 0,
            charIndex = 0,
            isDeleting = false;
        const typingSpeed = 100,
            erasingSpeed = 50,
            delayBetween = 1500;

        function typeEffect() {
            const typingElement = document.getElementById("auto-typing");
            if (index < textArray.length) {
                if (!isDeleting && charIndex < textArray[index].length) {
                    typingElement.textContent += textArray[index][charIndex];
                    charIndex++;
                    setTimeout(typeEffect, typingSpeed);
                } else if (isDeleting && charIndex > 0) {
                    typingElement.textContent = textArray[index].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(typeEffect, erasingSpeed);
                } else {
                    isDeleting = !isDeleting;
                    if (!isDeleting) {
                        index = (index + 1) % textArray.length;
                    }
                    setTimeout(typeEffect, delayBetween);
                }
            }
        }
        document.addEventListener("DOMContentLoaded", typeEffect);
    </script>


    <!-- Auto-Typing Effect -->
    <script>
        const textArray = ["dapatkan Sertifikasi Resmi", "belajar dari Ahli", "wujudkan Karier Impian!"];
        let index = 0,
            charIndex = 0,
            isDeleting = false;
        const typingSpeed = 100,
            erasingSpeed = 50,
            delayBetween = 1500;

        function typeEffect() {
            const typingElement = document.getElementById("auto-typing");
            if (index < textArray.length) {
                if (!isDeleting && charIndex < textArray[index].length) {
                    typingElement.textContent += textArray[index][charIndex];
                    charIndex++;
                    setTimeout(typeEffect, typingSpeed);
                } else if (isDeleting && charIndex > 0) {
                    typingElement.textContent = textArray[index].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(typeEffect, erasingSpeed);
                } else {
                    isDeleting = !isDeleting;
                    if (!isDeleting) {
                        index = (index + 1) % textArray.length;
                    }
                    setTimeout(typeEffect, delayBetween);
                }
            }
        }
        document.addEventListener("DOMContentLoaded", typeEffect);
    </script>


    <!-- About Us -->
    <section id="about" class="py-16 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <!-- Teks (Kiri) -->
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                    <i class="fas fa-users text-blue-500"></i> Tentang Kami
                </h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    Kami adalah lembaga pendidikan yang berkomitmen untuk memberikan pengalaman belajar terbaik bagi
                    Anda. Dengan kurikulum yang berkualitas, instruktur profesional, dan fasilitas modern, kami siap
                    membantu Anda mencapai kesuksesan.
                </p>
                <ul class="mt-4 space-y-3 text-gray-600 dark:text-gray-300">
                    <li>
                        <i class="fas fa-check-circle text-green-500"></i> Pengalaman lebih dari 10 tahun di bidang
                        pendidikan.
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-green-500"></i> Ribuan alumni telah sukses di berbagai
                        bidang.
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-green-500"></i> Program pembelajaran fleksibel dan inovatif.
                    </li>
                </ul>
                <a href="#contact"
                    class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition">
                    <i class="fas fa-envelope"></i> Hubungi Kami
                </a>
            </div>

            <!-- Gambar (Kanan) -->
            <div class="md:w-1/2 mt-8 md:mt-0">
                <img src="{{ asset('assets/img/about.jpg') }}" alt="Tentang Kami"
                    class="rounded-lg shadow-lg w-full max-w-md mx-auto md:max-w-full">
            </div>
        </div>
    </section>

    <!-- Keunggulan -->
    <section class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-gray-100">Keunggulan Kami</h2>
            <p class="text-center text-gray-600 dark:text-gray-300 mt-2">Mengapa memilih kami? Berikut adalah keunggulan
                yang kami tawarkan.</p>

            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <!-- Kurikulum Berkualitas -->
                <div
                    class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                    <div class="text-blue-500 text-5xl mb-4">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Kurikulum Berkualitas</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Dikembangkan oleh pakar pendidikan terbaik untuk
                        mendukung pembelajaran yang efektif.</p>
                </div>

                <!-- Instruktur Profesional -->
                <div
                    class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                    <div class="text-yellow-500 text-5xl mb-4">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Instruktur Profesional</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Dipandu oleh tenaga pengajar yang berpengalaman dan
                        ahli di bidangnya.</p>
                </div>

                <!-- Sertifikasi Resmi -->
                <div
                    class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center transform hover:scale-105 transition duration-300">
                    <div class="text-green-500 text-5xl mb-4">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Sertifikasi Resmi</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Sertifikat yang diakui secara nasional dan
                        internasional sebagai bukti kompetensi Anda.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Program -->
    <section id="program" class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center">Program Kami</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($programs as $program)
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold">{{ $program->name }}</h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($program->description, 100) }}
                        </p>
                        <a href="#" class="mt-4 inline-block text-blue-500 hover:text-blue-700">Pelajari Lebih
                            Lanjut</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Paket Edukasi -->
    <section id="paket-edukasi" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center">Paket Edukasi</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($paketEdukasi as $paket)
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold">{{ $paket->nama_paket }}</h3>
                        <p class="text-sm text-gray-500">Kode: {{ $paket->kode_paket }}</p>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($paket->deskripsi, 100) }}</p>
                        <p class="mt-2 font-semibold">Durasi: {{ $paket->durasi }} bulan | {{ $paket->pertemuan }}
                            pertemuan</p>
                        <a href="#" class="mt-4 inline-block text-blue-500 hover:text-blue-700">Lihat Detail</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Berita -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center">Berita Terbaru</h2>
            <div class="grid md:grid-cols-3 gap-8 mt-8">
                @foreach ($posts as $post)
                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                        <img src="{{ Storage::url($post->upload_gambar) }}" alt="{{ $post->alt_gambar }}"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold">{{ $post->judul }}</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($post->konten, 100) }}</p>
                            <a href="{{ route('post', ['tag' => urlencode($post->tag)]) }}"
                                class="mt-4 inline-block text-blue-500 hover:text-blue-700">
                                Baca Selengkapnya
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center">Gallery</h2>
            <div class="grid md:grid-cols-3 gap-6 mt-8">
                @foreach ($galleries as $gallery)
                    <div class="relative">
                        <img src="{{ Storage::url($gallery->upload_gambar) }}"
                            class="w-full h-48 object-cover rounded-lg shadow-md">
                        <div
                            class="absolute inset-0 bg-black/40 flex items-center justify-center text-white font-bold text-lg opacity-0 hover:opacity-100 transition">
                            Lihat</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center">Apa Kata Mereka?</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($testimonis as $testimoni)
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 dark:text-gray-300 italic">"{{ $testimoni->deskripsi }}"</p>

                        <!-- ⭐ Rating -->
                        <div class="mt-3 text-yellow-500">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $testimoni->rating)
                                    <span class="text-xl">★</span> {{-- Bintang Penuh --}}
                                @else
                                    <span class="text-xl text-gray-400">☆</span> {{-- Bintang Kosong --}}
                                @endif
                            @endfor
                        </div>

                        <div class="mt-4 flex items-center">
                            <div class="ml-3">
                                <p class="font-semibold">{{ $testimoni->nama }}</p>
                                <p class="text-sm text-gray-500">{{ $testimoni->asal_kota }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Contact Us -->
    <section id="contact" class="py-16 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                    <i class="fas fa-envelope text-blue-500"></i> Hubungi Kami
                </h2>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Silakan hubungi kami atau kirimkan pesan langsung
                    melalui formulir.</p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch justify-center gap-12">
                <!-- Form Kontak (Kiri) -->
                <div
                    class="w-full md:w-1/2 bg-gray-100 dark:bg-gray-800 p-8 rounded-lg shadow-lg flex flex-col justify-center h-full">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Kirim Pesan</h3>

                    <form action="#" method="POST" class="space-y-4 flex-1">
                        <div>
                            <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium">Nama
                                Lengkap</label>
                            <input type="text" id="name" name="name" required
                                class="w-full mt-2 px-4 py-3 rounded-lg bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>

                        <div>
                            <label for="email"
                                class="block text-gray-700 dark:text-gray-300 font-medium">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full mt-2 px-4 py-3 rounded-lg bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>

                        <div>
                            <label for="message"
                                class="block text-gray-700 dark:text-gray-300 font-medium">Pesan</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full mt-2 px-4 py-3 rounded-lg bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Informasi Kontak (Kanan) -->
                <div
                    class="w-full md:w-1/2 bg-gray-100 dark:bg-gray-800 p-8 rounded-lg shadow-lg flex flex-col justify-center h-full">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Kontak Kami</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Jangan ragu untuk menghubungi kami, tim kami siap
                        membantu Anda!</p>

                    <div class="space-y-4 flex-1">
                        <p class="flex items-center text-gray-700 dark:text-gray-300">
                            <i class="fas fa-envelope text-blue-500 mr-3"></i> info@example.com
                        </p>
                        <p class="flex items-center text-gray-700 dark:text-gray-300">
                            <i class="fas fa-phone text-green-500 mr-3"></i> +62 812-3456-7890
                        </p>
                        <p class="flex items-center text-gray-700 dark:text-gray-300">
                            <i class="fas fa-map-marker-alt text-red-500 mr-3"></i> Jl. Contoh No. 123, Jakarta
                        </p>
                    </div>

                    <!-- Tombol WhatsApp -->
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="mt-6 inline-flex items-center bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition self-start">
                        <i class="fab fa-whatsapp text-xl mr-2"></i> Chat via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890" target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center gap-2 hover:bg-green-600 transition duration-300">
        <i class="fab fa-whatsapp text-2xl"></i>
        <span class="text-lg font-semibold">Chat Kami</span>
    </a>


    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 text-center md:text-left">

                <!-- Brand & Deskripsi -->
                <div>
                    <h3 class="text-2xl font-bold text-white">Ossy Surf School</h3>
                    <p class="mt-2 text-gray-400">Memberikan layanan pendidikan terbaik untuk masa depan yang lebih
                        cerah.</p>
                </div>

                <!-- Navigasi -->
                <div>
                    <h4 class="text-lg font-semibold text-white">Navigasi</h4>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="hover:text-blue-400">Beranda</a></li>
                        <li><a href="#program" class="hover:text-blue-400">Program</a></li>
                        <li><a href="#gallery" class="hover:text-blue-400">Gallery</a></li>
                        <li><a href="#contact" class="hover:text-blue-400">Kontak</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div class="text-center md:text-left">
                    <h4 class="text-lg font-semibold text-white">Ikuti Kami</h4>
                    <div class="mt-3 flex justify-center md:justify-start space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-500 text-2xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-sky-400 text-2xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-pink-500 text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 text-2xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Garis Pemisah -->
            <div class="mt-8 border-t border-gray-700 pt-6 text-center">
                <p class="text-sm text-gray-500">
                    &copy; <span id="current-year"></span> Ossy Surf School. All Rights Reserved.
                </p>
            </div>

            <script>
                document.getElementById('current-year').textContent = new Date().getFullYear();
            </script>
        </div>
    </footer>


</body>

</html>
