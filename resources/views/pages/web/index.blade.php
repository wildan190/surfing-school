<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Website Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Website Kami</a>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-500">Beranda</a>
                <a href="#program" class="hover:text-blue-500">Program</a>
                <a href="#gallery" class="hover:text-blue-500">Gallery</a>
                <a href="#contact" class="hover:text-blue-500">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative w-full h-[80vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('/images/hero-bg.jpg');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold">Selamat Datang di Website Kami</h1>
            <p class="text-lg mt-4">Menyediakan program pendidikan terbaik untuk masa depan Anda</p>
            <a href="#contact" class="mt-6 inline-block bg-blue-500 px-6 py-3 rounded-lg text-white text-lg shadow-md hover:bg-blue-600">Hubungi Kami</a>
        </div>
    </section>

    <!-- Keunggulan -->
    <section class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center">Keunggulan Kami</h2>
            <div class="grid md:grid-cols-3 gap-8 mt-8">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold">Kurikulum Berkualitas</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Dikembangkan oleh pakar pendidikan terbaik.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold">Instruktur Profesional</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Dipandu oleh tenaga pengajar yang berpengalaman.</p>
                </div>
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold">Sertifikasi Resmi</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Sertifikat diakui secara nasional dan internasional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program -->
<section id="program" class="py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center">Program Kami</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            @foreach($programs as $program)
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">{{ $program->name }}</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($program->description, 100) }}</p>
                    <a href="#" class="mt-4 inline-block text-blue-500 hover:text-blue-700">Pelajari Lebih Lanjut</a>
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
            @foreach($paketEdukasi as $paket)
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">{{ $paket->nama_paket }}</h3>
                    <p class="text-sm text-gray-500">Kode: {{ $paket->kode_paket }}</p>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($paket->deskripsi, 100) }}</p>
                    <p class="mt-2 font-semibold">Durasi: {{ $paket->durasi }} bulan | {{ $paket->pertemuan }} pertemuan</p>
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
                @foreach($posts as $post)
                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                        <img src="{{ Storage::url($post->upload_gambar) }}" alt="{{ $post->alt_gambar }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold">{{ $post->judul }}</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300">{{ Str::limit($post->konten, 100) }}</p>
                            <a href="{{ route('post', ['tag' => urlencode($post->tag)]) }}" class="mt-4 inline-block text-blue-500 hover:text-blue-700">
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
                @foreach($galleries as $gallery)
                    <div class="relative">
                        <img src="{{ Storage::url($gallery->upload_gambar) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center text-white font-bold text-lg opacity-0 hover:opacity-100 transition">Lihat</div>
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
            @foreach($testimonis as $testimoni)
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
    <section id="contact" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold">Hubungi Kami</h2>
            <p class="mt-4 text-gray-600 dark:text-gray-300">Silakan hubungi kami melalui kontak di bawah ini.</p>
            <p class="mt-2 text-lg font-semibold">Email: info@example.com</p>
            <p class="mt-2 text-lg font-semibold">Telepon: +62 812-3456-7890</p>
        </div>
    </section>

    <!-- Floating WhatsApp Button -->
<a href="https://wa.me/6281234567890" target="_blank" 
   class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
    <i class="fab fa-whatsapp text-2xl"></i>
</a>


    <!-- Footer -->
    <footer class="py-6 bg-gray-800 text-center text-white">
        &copy; 2025 Website Kami. All Rights Reserved.
    </footer>

</body>
</html>
