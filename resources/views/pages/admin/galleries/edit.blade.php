<x-layouts.app :title="__('Edit Gallery')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-semibold">Edit Gallery</h1>

        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="judul" class="block text-sm font-medium">Judul</label>
                <input type="text" id="judul" name="judul" value="{{ $gallery->judul }}" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="w-full border border-gray-300 rounded px-3 py-2">{{ $gallery->deskripsi }}</textarea>
            </div>

            <div>
                <label for="upload_gambar" class="block text-sm font-medium">Upload Gambar (Kosongkan jika tidak ingin mengubah)</label>
                <input type="file" id="upload_gambar" name="upload_gambar" class="w-full border border-gray-300 rounded px-3 py-2">
                <img src="{{ asset('storage/' . $gallery->upload_gambar) }}" alt="Preview" class="mt-2 w-32 rounded">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
        </form>
    </div>
</x-layouts.app>
