<x-layouts.app :title="__('Gallery')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Gallery</h1>
            <a href="{{ route('gallery.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Tambah Gallery</a>
        </div>

        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            @foreach ($galleries as $gallery)
                <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <img src="{{ asset('storage/' . $gallery->upload_gambar) }}" alt="{{ $gallery->judul }}" class="absolute inset-0 size-full object-cover">
                    <div class="absolute bottom-0 bg-black/50 text-white p-2 w-full flex justify-between items-center">
                        <span>{{ $gallery->judul }}</span>
                        <div class="flex gap-2">
                            <!-- Tombol Edit -->
                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded text-sm">Edit</a>
                            
                            <!-- Tombol Hapus -->
                            <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded text-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
