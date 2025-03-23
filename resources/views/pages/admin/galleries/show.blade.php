<x-layouts.app :title="__('Detail Gallery')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-semibold">{{ $gallery->judul }}</h1>

        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('storage/' . $gallery->upload_gambar) }}" alt="{{ $gallery->judul }}" class="absolute inset-0 size-full object-cover">
        </div>

        <p class="text-gray-700 dark:text-gray-300">{{ $gallery->deskripsi }}</p>

        <a href="{{ route('gallery.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Kembali</a>
    </div>
</x-layouts.app>
