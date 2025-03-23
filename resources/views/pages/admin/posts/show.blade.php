<x-layouts.app :title="__('Detail Post')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-semibold">{{ $post->judul }}</h1>
        <p class="text-gray-500">{{ $post->tanggal_post }} | Tag: {{ $post->tag ?? '-' }}</p>

        <div class="relative aspect-video overflow-hidden rounded-xl border border-gray-300">
            <img src="{{ asset('storage/' . $post->upload_gambar) }}" alt="{{ $post->alt_gambar }}" class="absolute inset-0 size-full object-cover">
        </div>

        <p class="mt-4 text-gray-700">{{ $post->konten }}</p>

        <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Kembali</a>
    </div>
</x-layouts.app>
