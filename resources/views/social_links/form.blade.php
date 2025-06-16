<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($link) ? 'Edit Social Link' : 'Create Social Link' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ isset($link) ? route('social-links.update', $link->id) : route('social-links.store') }}"
                      method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name', $link->name ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Icon Class (FontAwesome)</label>
                        <input type="text" name="icon" value="{{ old('icon', $link->icon ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               placeholder="e.g., fab fa-facebook or fa-brands fa-instagram">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">URL</label>
                        <input type="url" name="url" value="{{ old('url', $link->url ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                            <option value="1" {{ old('status', $link->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $link->status ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($link) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
