<x-layouts.app :title="__('Tambah Paket Edukasi')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Tambah Paket Edukasi</h1>

        <form action="{{ route('paket-edukasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Nama Paket</label>
                <input type="text" name="nama_paket"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Durasi (Jam)</label>
                <input type="number" name="durasi"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Jumlah Pertemuan</label>
                <input type="number" name="pertemuan"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Deskripsi</label>
                <textarea name="deskripsi"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Harga (Rp)</label>
                <input type="number" name="harga" value="{{ old('harga', $paketEdukasi->harga ?? '') }}"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Upload Gambar</label>
                <input type="file" name="upload_gambar"
                    class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200">
                @if (!empty($paketEdukasi->upload_gambar))
                    <img src="{{ asset('storage/' . $paketEdukasi->upload_gambar) }}" class="mt-2 w-32">
                @endif
            </div>

            <button type="submit"
                class="px-4 py-2 bg-blue-500 dark:bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 transition">
                Simpan
            </button>
        </form>
    </div>
</x-layouts.app>
