<x-layouts.app :title="__('Daftar Paket Edukasi')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Daftar Paket Edukasi</h1>
            <a href="{{ route('paket-edukasi.create') }}" class="px-4 py-2 bg-blue-500 dark:bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 transition">
                + Tambah Paket
            </a>
        </div>

        <table class="w-full border border-gray-300 dark:border-gray-700 rounded-lg">
            <thead class="bg-gray-100 dark:bg-gray-800">
                <tr class="text-left text-gray-800 dark:text-gray-200">
                    <th class="px-4 py-2">Kode</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Durasi</th>
                    <th class="px-4 py-2">Pertemuan</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paketEdukasis as $paket)
                    <tr class="border-t border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $paket->kode_paket }}</td>
                        <td class="px-4 py-2">{{ $paket->nama_paket }}</td>
                        <td class="px-4 py-2">{{ $paket->durasi }} hari</td>
                        <td class="px-4 py-2">{{ $paket->pertemuan }} kali</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('paket-edukasi.show', $paket->id) }}" class="px-3 py-1 bg-green-500 dark:bg-green-600 text-white rounded-md text-sm hover:bg-green-600 dark:hover:bg-green-700 transition">Lihat</a>
                            <a href="{{ route('paket-edukasi.edit', $paket->id) }}" class="px-3 py-1 bg-yellow-500 dark:bg-yellow-600 text-white rounded-md text-sm hover:bg-yellow-600 dark:hover:bg-yellow-700 transition">Edit</a>
                            <form action="{{ route('paket-edukasi.destroy', $paket->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 dark:bg-red-600 text-white rounded-md text-sm hover:bg-red-600 dark:hover:bg-red-700 transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
