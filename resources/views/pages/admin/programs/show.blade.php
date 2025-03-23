<x-layouts.app :title="__('Detail Program')">
    <div class="p-6 bg-white dark:bg-gray-900 shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Detail Program</h1>
        
        <p class="text-gray-800 dark:text-gray-200"><strong>Nama:</strong> {{ $program->name }}</p>
        <p class="text-gray-600 dark:text-gray-400"><strong>Deskripsi:</strong> {{ $program->description ?? '-' }}</p>

        <div class="mt-4 flex gap-2">
            <a href="{{ route('programs.index') }}" class="px-4 py-2 bg-gray-500 dark:bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-600 dark:hover:bg-gray-700 transition">
                Kembali
            </a>
            <a href="{{ route('programs.edit', $program->id) }}" class="px-4 py-2 bg-yellow-500 dark:bg-yellow-600 text-white rounded-lg shadow-md hover:bg-yellow-600 dark:hover:bg-yellow-700 transition">
                Edit
            </a>
        </div>
    </div>
</x-layouts.app>
s