<x-layouts.app :title="__('Detail Testimoni')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Detail Testimoni</h1>
        
        <p class="text-gray-800 dark:text-gray-200"><strong>Nama:</strong> {{ $testimoni->nama }}</p>
        <p class="text-gray-800 dark:text-gray-200"><strong>Asal Kota:</strong> {{ $testimoni->asal_kota }}</p>
        <p class="text-gray-800 dark:text-gray-200"><strong>Rating:</strong> {{ $testimoni->rating }} ⭐</p>
        <p class="text-gray-600 dark:text-gray-400"><strong>Deskripsi:</strong> {{ $testimoni->deskripsi ?? '-' }}</p>

        <a href="{{ route('testimoni.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow-md hover:bg-gray-600 transition">
            Kembali
        </a>
    </div>
</x-layouts.app>
