<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">Terms & Conditions</h2>
            @can('add term condition')
                <a href="{{ route('terms-conditions.create') }}"
                   class="px-5 py-2 bg-gradient-to-r from-[#c21108] to-[#000308] text-white font-semibold rounded-lg shadow-md hover:from-[#000308] hover:to-[#c21108] transition">
                    + Add Term
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
                        <th class="px-6 py-4">Heading</th>
                        <th class="px-6 py-4">Content</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                    @forelse ($termConditions as $term)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium">{{ $term->heading }}</td>
                            <td class="px-6 py-4">{{ Str::limit(strip_tags($term->content), 80) }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center gap-3">
                                    @can('edit term condition')
                                        <a href="{{ route('terms-conditions.edit', ['term' => $term->id]) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                            ✏️ Edit
                                        </a>
                                    @endcan
                                    @can('delete term condition')
                                        <form action="{{ route('terms-conditions.delete', $term->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this term?');">
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
                            <td colspan="3" class="text-center py-6 text-gray-400 text-base">No terms found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
