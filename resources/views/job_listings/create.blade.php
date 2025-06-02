<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($job) ? 'Edit Job Listing' : 'Create Job Listing' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($job) ? 'Edit Job Listing' : 'Create New Job Listing' }}
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

                <form action="{{ isset($job) ? route('job.update', $job->id) : route('job.store') }}"
                      method="POST" class="space-y-4">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Job Title</label>
                        <input type="text" name="title"
                               value="{{ old('title', $job->title ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               placeholder="Enter job title" required>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Job Description</label>
                        <textarea name="description" rows="4"
                                  class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                                  placeholder="Enter job description" required>{{ old('description', $job->description ?? '') }}</textarea>
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Location</label>
                        <input type="text" name="location"
                               value="{{ old('location', $job->location ?? '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               placeholder="Enter location" required>
                    </div>

                    <!-- Salary Range -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Minimum Salary</label>
                            <input type="number" name="salary_min"
                                   value="{{ old('salary_min', $job->salary_min ?? '') }}"
                                   class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                                   placeholder="₹ Minimum salary" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Maximum Salary</label>
                            <input type="number" name="salary_max"
                                   value="{{ old('salary_max', $job->salary_max ?? '') }}"
                                   class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                                   placeholder="₹ Maximum salary" required>
                        </div>
                    </div>

                    <!-- Job Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Job Type</label>
                        <select name="job_type"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" required>
                            <option value="">-- Select Type --</option>
                            @foreach(['full-time', 'part-time', 'internship'] as $type)
                                <option value="{{ $type }}" {{ old('job_type', $job->job_type ?? '') === $type ? 'selected' : '' }}>
                                    {{ ucfirst($type) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Category</label>
                        <select name="category_id"
                                class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $job->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Deadline -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Application Deadline</label>
                        <input type="date" name="deadline"
                               value="{{ old('deadline', isset($job->deadline) ? $job->deadline->format('Y-m-d') : '') }}"
                               class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                               required>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_active" value="1"
                                   class="rounded text-green-600 focus:ring-green-500"
                                {{ old('is_active', $job->is_active ?? true) ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Active</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                            {{ isset($job) ? 'Update Job' : 'Post Job' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
