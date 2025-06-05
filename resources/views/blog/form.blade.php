<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') }}"
                      method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    @if(isset($blog)) @method('PUT') @endif

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" name="title" value="{{ old('title', $blog->title ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Short Message</label>
                        <input type="text" name="short_msg" value="{{ old('short_msg', $blog->short_msg ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Content</label>
                        <textarea name="content" rows="5"
                                  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                                  required>{{ old('content', $blog->content ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Category</label>
                        <input type="text" name="category" value="{{ old('category', $blog->category ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Author</label>
                        <input type="text" name="author" value="{{ old('author', $blog->author ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Image</label>
                        <input type="file" name="image" class="w-full px-4 py-2 border rounded-lg">
                        @if(isset($blog->image))
                            <img src="{{ asset('storage/' . $blog->image) }}" class="mt-2 w-32 rounded shadow" alt="Blog Image">
                        @endif
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
                            <option value="draft" {{ old('status', $blog->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old('status', $blog->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($blog) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
