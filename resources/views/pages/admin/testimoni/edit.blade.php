<x-layouts.app :title="__('Edit Testimoni')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Edit Testimoni</h1>

        <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="nama" value="{{ $testimoni->nama }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Asal Kota</label>
                <input type="text" name="asal_kota" value="{{ $testimoni->asal_kota }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">
                Update
            </button>
        </form>
    </div>
</x-layouts.app>
