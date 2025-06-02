<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($category) ? 'Edit Category' : 'Create Category' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($category) ? 'Edit Category' : 'Create New Category' }}
                </h2>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}"
                      method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Category Name</label>
                        <input type="text" name="name"
                               value="{{ old('name', isset($category) ? $category->name : '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               placeholder="Enter category name" required>
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($category) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
