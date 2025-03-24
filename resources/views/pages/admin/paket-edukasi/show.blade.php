<x-layouts.app :title="__('Detail Paket Edukasi')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Detail Paket Edukasi</h1>

        <p class="text-gray-800 dark:text-gray-200"><strong>Kode:</strong> {{ $paketEdukasi->kode_paket }}</p>
        <p class="text-gray-800 dark:text-gray-200"><strong>Nama:</strong> {{ $paketEdukasi->nama_paket }}</p>
        <p class="text-gray-600 dark:text-gray-400"><strong>Deskripsi:</strong> {{ $paketEdukasi->deskripsi ?? '-' }}</p>
        <p class="text-gray-800 dark:text-gray-200"><strong>Harga:</strong> Rp
            {{ number_format($paketEdukasi->harga, 2, ',', '.') }}</p>

        @if (!empty($paketEdukasi->upload_gambar))
            <img src="{{ asset('storage/' . $paketEdukasi->upload_gambar) }}" class="mt-4 w-64 rounded-lg shadow-lg">
        @endif

        <a href="{{ route('paket-edukasi.index') }}"
            class="px-4 py-2 bg-gray-500 dark:bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-600 dark:hover:bg-gray-700 transition">
            Kembali
        </a>
    </div>
</x-layouts.app>
