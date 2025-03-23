<x-layouts.app :title="__('Edit Post')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-semibold">Edit Post</h1>

        <form action="{{ route('posts.update', $post->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" value="{{ $post->judul }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Tanggal Post</label>
                <input type="date" name="tanggal_post" value="{{ $post->tanggal_post }}" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Tag</label>
                <input type="text" name="tag" value="{{ $post->tag }}" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium">Upload Gambar</label>
                <input type="file" name="upload_gambar" class="w-full border border-gray-300 rounded px-3 py-2">
                <img src="{{ asset('storage/' . $post->upload_gambar) }}" alt="Preview" class="mt-2 w-32 rounded">
            </div>

            <div>
                <label class="block text-sm font-medium">Alt Gambar</label>
                <input type="text" name="alt_gambar" value="{{ $post->alt_gambar }}" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium">Konten</label>
                <textarea name="konten" class="w-full border border-gray-300 rounded px-3 py-2" rows="5" required>{{ $post->konten }}</textarea>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
        </form>
    </div>
</x-layouts.app>
