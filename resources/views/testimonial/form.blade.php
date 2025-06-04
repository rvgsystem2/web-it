<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($testimonial) ? 'Edit Testimonial' : 'Create Testimonial' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial' }}
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

                <form action="{{ isset($testimonial) ? route('testimonials.update', $testimonial->id) : route('testimonials.store') }}"
                      method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                   

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" name="title" value="{{ old('title', $testimonial->title ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Company</label>
                        <input type="text" name="company" value="{{ old('company', $testimonial->company ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Message</label>
                        <textarea name="message" rows="4"
                                  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">{{ old('message', $testimonial->message ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Image</label>
                        <input type="file" name="image" class="w-full border rounded-lg px-4 py-2">
                        @if(isset($testimonial->image))
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="mt-3 w-24 rounded shadow" alt="Image">
                        @endif
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status" class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
                            @foreach(['active', 'inactive', 'pending'] as $status)
                                <option value="{{ $status }}" @if(old('status', $testimonial->status ?? '') == $status) selected @endif>
                                    {{ ucfirst($status) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($testimonial) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
