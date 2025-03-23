<x-layouts.app :title="__('Daftar Testimoni')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Daftar Testimoni</h1>
            <a href="{{ route('testimoni.create') }}" class="px-4 py-2 bg-blue-500 dark:bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 transition">
                + Tambah Testimoni
            </a>
        </div>

        <table class="w-full border border-gray-300 dark:border-gray-700 rounded-lg">
            <thead class="bg-gray-100 dark:bg-gray-800">
                <tr class="text-left text-gray-800 dark:text-gray-200">
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Asal Kota</th>
                    <th class="px-4 py-2">Rating</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonis as $testimoni)
                    <tr class="border-t border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <td class="px-4 py-2">{{ $testimoni->nama }}</td>
                        <td class="px-4 py-2">{{ $testimoni->asal_kota }}</td>
                        <td class="px-4 py-2">{{ $testimoni->rating }} ⭐</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('testimoni.show', $testimoni->id) }}" class="px-3 py-1 bg-green-500 text-white rounded-md text-sm hover:bg-green-600 transition">Lihat</a>
                            <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md text-sm hover:bg-yellow-600 transition">Edit</a>
                            <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md text-sm hover:bg-red-600 transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
