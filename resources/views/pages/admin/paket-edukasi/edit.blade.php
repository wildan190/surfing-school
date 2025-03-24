<x-layouts.app :title="__('Edit Paket Edukasi')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Edit Paket Edukasi</h1>

        <form action="{{ route('paket-edukasi.update', $paketEdukasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Paket -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Nama Paket</label>
                <input type="text" name="nama_paket" value="{{ old('nama_paket', $paketEdukasi->nama_paket) }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>

            <!-- Durasi -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Durasi (Jam)</label>
                <input type="number" name="durasi" value="{{ old('durasi', $paketEdukasi->durasi) }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>

            <!-- Jumlah Pertemuan -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Jumlah Pertemuan</label>
                <input type="number" name="pertemuan" value="{{ old('pertemuan', $paketEdukasi->pertemuan) }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Harga (Rp)</label>
                <input type="number" name="harga" value="{{ old('harga', $paketEdukasi->harga) }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Deskripsi</label>
                <textarea name="deskripsi" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200">{{ old('deskripsi', $paketEdukasi->deskripsi) }}</textarea>
            </div>

            <!-- Upload Gambar -->
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Upload Gambar</label>
                <input type="file" name="upload_gambar" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200">
                
                <!-- Menampilkan gambar saat ini jika ada -->
                @if (!empty($paketEdukasi->upload_gambar))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $paketEdukasi->upload_gambar) }}" class="w-32 rounded-lg shadow-md">
                    </div>
                @endif
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center gap-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 dark:bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 transition">
                    Update
                </button>
                <a href="{{ route('paket-edukasi.index') }}" class="px-4 py-2 bg-gray-500 dark:bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-600 dark:hover:bg-gray-700 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-layouts.app>
