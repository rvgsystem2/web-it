<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($about) ? 'Edit About' : 'Create About' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($about) ? 'Edit About Section' : 'Create About Section' }}
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

                <form action="{{ isset($about) ? route('about.update', $about->id) : route('about.store') }}"
                    method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                   

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" name="title"
                            value="{{ old('title', $about->title ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Enter title">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Description</label>
                        <textarea name="description" rows="4"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Write description...">{{ old('description', $about->description ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Image</label>
                        <input type="file" name="image" class="w-full border rounded-lg px-4 py-2">
                        @if(isset($about->image))
                            <img src="{{ asset('storage/' . $about->image) }}" class="mt-3 w-32 rounded shadow" alt="Current Image">
                        @endif
                    </div>

                    @for ($i = 1; $i <= 4; $i++)
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Feature {{ $i }}</label>
                            <input type="text" name="f_{{ $i }}"
                                value="{{ old("f_$i", $about?->{"f_$i"} ?? '') }}"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                                placeholder="Feature {{ $i }}">
                        </div>
                    @endfor

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Call To Title</label>
                        <input type="text" name="call_to_title"
                            value="{{ old('call_to_title', $about->call_to_title ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="e.g. Call Us Now">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Call To Number</label>
                        <input type="text" name="call_to_number"
                            value="{{ old('call_to_number', $about->call_to_number ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="e.g. +91-9876543210">
                    </div>

                    <div>
                        <button type="submit"
                            class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($about) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
