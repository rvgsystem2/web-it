<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($banner) ? 'Edit Banner' : 'Create Banner' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($banner) ? 'Edit Banner' : 'Create New Banner' }}
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

                <form action="{{ isset($banner) ? route('banner.update', $banner->id) : route('banner.store') }}"
                      method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Banner Title</label>
                        <input type="text" name="title"
                               value="{{ old('title', isset($banner) ? $banner->title : '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               placeholder="Enter banner title" required>
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Banner Image</label>
                        <input type="file" name="banner" class="w-full px-3 py-2 border rounded-lg">
                        @if (isset($banner) && $banner->banner)
                            <div class="mt-3">
                                <p class="text-sm text-gray-600 mb-1">Current Image:</p>
                                <img src="{{ asset('storage/' . $banner->banner) }}" class="w-40 rounded shadow">
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($banner) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
