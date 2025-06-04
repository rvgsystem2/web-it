<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($logo) ? 'Edit Logo' : 'Add Logo' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($logo) ? 'Edit Logo' : 'Upload New Logo' }}
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

                <form action="{{ isset($logo) ? route('logos.update', $logo->id) : route('logos.store') }}"
                      method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                 
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Logo Name</label>
                        <input type="text" name="name" value="{{ old('name', $logo->name ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               placeholder="Enter name" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Logo Image</label>
                        <input type="file" name="image" class="w-full border rounded-lg px-4 py-2">
                        @if(isset($logo->image))
                            <img src="{{ asset('storage/' . $logo->image) }}" class="mt-3 w-32 rounded shadow" alt="Logo Image">
                        @endif
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($logo) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
