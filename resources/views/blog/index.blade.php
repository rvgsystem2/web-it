<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">Blog Posts</h2>
            @can('add blog')
            <a href="{{ route('blogs.create') }}"
               class="px-5 py-2 bg-gradient-to-r from-[#c21108] to-[#000308] text-white font-semibold rounded-lg shadow-md hover:from-[#000308] hover:to-[#c21108] transition">
                + Add Blog
            </a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 shadow">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
                <table class="w-full text-sm text-left border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-700 uppercase font-semibold text-xs">
                        <tr>
                            <th class="px-6 py-4">Title</th>
                            <th class="px-6 py-4">Category</th>
                            <th class="px-6 py-4">Author</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Image</th>
                            <th class="px-6 py-4 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($blogs as $blog)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4">{{ $blog->title }}</td>
                                <td class="px-6 py-4">{{ $blog->category }}</td>
                                <td class="px-6 py-4">{{ $blog->author }}</td>
                                <td class="px-6 py-4 capitalize">{{ $blog->status }}</td>
                                <td class="px-6 py-4">
                                    @if($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" class="w-12 h-12 object-cover rounded shadow">
                                    @else
                                        <span class="text-gray-400 italic">No Image</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-3">
                                        @can('edit blog')
                                        <a href="{{ route('blogs.edit', $blog->id) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                            ✏️ Edit
                                        </a>
                                        @endcan
                                            @can('delete blog')
                                            <form action="{{ route('blogs.delete', $blog->id) }}" method="get" onsubmit="return confirm('Are you sure?');">
                                                @csrf

                                                <button type="submit"
                                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                                    🗑️ Delete
                                                </button>
                                            </form>
                                            @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-6 text-gray-400 text-base">No blog posts found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
