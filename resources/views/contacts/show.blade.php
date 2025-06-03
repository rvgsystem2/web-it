<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">
                {{ __('Contact Details') }}
            </h2>
            <a href="{{ route('contact.index') }}"
               class="px-5 py-2 bg-gradient-to-r from-gray-700 to-gray-900 text-white font-semibold rounded-lg shadow-md hover:from-gray-900 hover:to-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 transition duration-300 ease-in-out">
                ← Back to Contacts
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact #{{ $contact->id }}</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-600">Name</p>
                        <p class="text-lg font-medium text-gray-900">{{ $contact->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="text-lg font-medium text-gray-900">{{ $contact->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Phone</p>
                        <p class="text-lg font-medium text-gray-900">{{ $contact->phone }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Country</p>
                        <p class="text-lg font-medium text-gray-900">{{ $contact->country }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600">Message</p>
                        <p class="text-base font-normal text-gray-800 whitespace-pre-line">{{ $contact->message }}</p>
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <form action="{{ route('contact.delete', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                        @csrf
                        <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg text-sm font-semibold transition shadow">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
