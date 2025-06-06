<x-layouts.app :title="__('Edit Program')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Edit Program</h1>

        <form action="{{ route('programs.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Nama Program</label>
                <input type="text" name="name" value="{{ $program->name }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300">Deskripsi</label>
                <textarea name="description" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-200">{{ $program->description }}</textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 dark:bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-600 dark:hover:bg-blue-700 transition">
                Update
            </button>
        </form>
    </div>
</x-layouts.app>
