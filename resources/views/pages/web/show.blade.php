<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->judul }} - Detail Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Ossy Surf School</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-500">Beranda</a>
                <a href="/#program" class="hover:text-blue-500">Program</a>
                <a href="/#gallery" class="hover:text-blue-500">Gallery</a>
                <a href="/#contact" class="hover:text-blue-500">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative w-full h-[50vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ Storage::url($post->upload_gambar) }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center text-white">
            <h1 class="text-4xl font-bold">{{ $post->judul }}</h1>
            <p class="text-lg mt-2">{{ date('d F Y', strtotime($post->tanggal_post)) }}</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-10 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6 lg:px-20">
            <article class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <img src="{{ Storage::url($post->upload_gambar) }}" alt="{{ $post->alt_gambar }}" class="w-full h-96 object-cover rounded-lg mb-6">
                
                <!-- Tag -->
                <p class="text-blue-500 font-semibold uppercase mb-3">Tag: {{ $post->tag }}</p>
                
                <!-- Konten -->
                <div class="prose prose-lg dark:prose-invert">
                    {!! nl2br(e($post->konten)) !!}
                </div>
            </article>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-800 text-center text-white">
        &copy; 2025 Ossy Surf School. All Rights Reserved.
    </footer>

</body>
</html>
