<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($team) ? 'Edit Team Member' : 'Add Team Member' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($team) ? 'Edit Team Member' : 'Add New Team Member' }}
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

                <form action="{{ isset($team) ? route('teams.update', $team->id) : route('teams.store') }}"
                      method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                   

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name', $team->name ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" name="title" value="{{ old('title', $team->title ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Image</label>
                        <input type="file" name="image" class="w-full border rounded-lg px-4 py-2">
                        @if(isset($team->image))
                            <img src="{{ asset('storage/' . $team->image) }}" class="mt-3 w-24 rounded shadow" alt="Team Image">
                        @endif
                    </div>

                    @foreach(['facebook', 'twitter', 'linkedin', 'instagram'] as $platform)
                        <div>
                            <label class="block text-gray-700 font-medium mb-2 capitalize">{{ ucfirst($platform) }} Link</label>
                            <input type="url" name="{{ $platform }}" value="{{ old($platform, $team->$platform ?? '') }}"
                                   class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                        </div>
                    @endforeach

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($team) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
