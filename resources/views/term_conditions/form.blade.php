<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($term) ? 'Edit Term & Condition' : 'Create Term & Condition' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ isset($term) ? route('terms-conditions.update', ['term' => $term->id]) : route('terms-conditions.store') }}"
                      method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Heading</label>
                        <input type="text" name="heading" value="{{ old('heading', $term->heading ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Content</label>
                        <textarea id="editor" name="content" rows="6"
                                  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                            {{ old('content', $term->content ?? '') }}
                        </textarea>
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($term) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            CKEDITOR.replace('editor', {
                removePlugins: 'easyimage,cloudservices', // remove cloud-based features
                height: 300
            });
        });
    </script>
</x-app-layout>
