<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">
                {{ __('Contact Management') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Success Message -->
            @if (session('success'))
                <div class="flex items-center bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- Contact Table -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Submissions</h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-700 uppercase font-semibold text-xs">
                        <tr>
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">Name</th>
                            <th class="px-6 py-4">Email</th>
                            <th class="px-6 py-4">Phone</th>
                            <th class="px-6 py-4">Country</th>
                            <th class="px-6 py-4">Message</th>
                            <th class="px-6 py-4 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($contacts as $contact)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium text-gray-800">{{ $contact->id }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $contact->name }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $contact->email }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $contact->phone }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $contact->country }}</td>
                                <td class="px-6 py-4 text-gray-600">{{ Str::limit($contact->message, 50) }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-3">
                                        @can('view contact detail')
                                        <a href="{{ route('contact.show', $contact->id) }}"
                                           class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                            👁️ View
                                        </a>
                                        @endcan
                                        @can('delete contact')
                                        <form action="{{ route('contact.delete', $contact->id) }}" method="get" onsubmit="return confirm('Are you sure you want to delete this contact?');">
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
                                <td colspan="7" class="text-center py-6 text-gray-400 text-base">
                                    No contact submissions found.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
