<x-layouts.app :title="__('Posts')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl bg-white dark:bg-gray-900 p-6 shadow-lg">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Daftar Post</h1>
            <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-blue-500 dark:bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 transition">
                + Tambah Post
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 dark:border-gray-700 rounded-lg">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr class="text-left text-gray-800 dark:text-gray-200">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Tag</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="border-t border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                            <td class="px-4 py-2 text-gray-800 dark:text-gray-200">{{ $post->judul }}</td>
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-400">{{ $post->tanggal_post }}</td>
                            <td class="px-4 py-2 text-gray-600 dark:text-gray-400">{{ $post->tag ?? '-' }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('posts.show', $post->slug) }}" class="px-3 py-1 bg-green-500 dark:bg-green-600 text-white rounded-md text-sm hover:bg-green-600 dark:hover:bg-green-700 transition">
                                    Lihat
                                </a>
                                <a href="{{ route('posts.edit', $post->slug) }}" class="px-3 py-1 bg-yellow-500 dark:bg-yellow-600 text-white rounded-md text-sm hover:bg-yellow-600 dark:hover:bg-yellow-700 transition">
                                    Edit
                                </a>
                                <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 dark:bg-red-600 text-white rounded-md text-sm hover:bg-red-600 dark:hover:bg-red-700 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
