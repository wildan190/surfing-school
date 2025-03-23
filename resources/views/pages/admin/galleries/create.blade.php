<x-layouts.app :title="__('Tambah Gallery')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-semibold">Tambah Gallery</h1>

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="judul" class="block text-sm font-medium">Judul</label>
                <input type="text" id="judul" name="judul" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
            </div>

            <div>
                <label for="upload_gambar" class="block text-sm font-medium">Upload Gambar</label>
                <input type="file" id="upload_gambar" name="upload_gambar" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
        </form>
    </div>
</x-layouts.app>
