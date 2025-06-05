<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($faq) ? 'Edit FAQ' : 'Create FAQ' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ isset($faq) ? route('faqs.update', $faq->id) : route('faqs.store') }}"
                      method="POST" class="space-y-5">
                    @csrf
                  

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Question</label>
                        <input type="text" name="question" value="{{ old('question', $faq->question ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Answer</label>
                        <textarea name="answer" rows="4"
                                  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">{{ old('answer', $faq->answer ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status"
                                class="w-full border px-4 py-2 rounded-lg focus:ring focus:ring-blue-200">
                            <option value="active" {{ old('status', $faq->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $faq->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($faq) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
