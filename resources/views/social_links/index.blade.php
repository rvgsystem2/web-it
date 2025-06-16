<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">Social Links</h2>
            @can('add social link')
                <a href="{{ route('social-links.create') }}"
                   class="px-5 py-2 bg-gradient-to-r from-[#c21108] to-[#000308] text-white font-semibold rounded-lg shadow-md hover:from-[#000308] hover:to-[#c21108] transition">
                    + Add Social Link
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
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Icon</th>
                        <th class="px-6 py-4">URL</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                    @forelse ($socialLinks as $link)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium">{{ $link->name }}</td>
                            <td class="px-6 py-4">
                                @if ($link->icon)
                                    <i class="{{ $link->icon }}"></i>
                                @else
                                    <span class="text-gray-400">—</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ $link->url }}" class="text-blue-600 hover:underline" target="_blank">
                                    {{ Str::limit($link->url, 50) }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                    <span class="inline-block px-2 py-1 text-xs font-semibold rounded
                                                  {{ $link->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-600' }}">
                                        {{ $link->status ? 'Active' : 'Inactive' }}
                                    </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center gap-3">
                                    @can('edit social link')
                                        <a href="{{ route('social-links.edit', $link->id) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                            ✏️ Edit
                                        </a>
                                    @endcan
                                    @can('delete social link')
                                        <form action="{{ route('social-links.delete', $link->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this link?');">
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
                            <td colspan="5" class="text-center py-6 text-gray-400 text-base">No social links found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
