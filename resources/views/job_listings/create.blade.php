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

                    <!-- Skills / Keywords -->
                    <div x-data="tagInput()" class="w-full">
                        <label class="block text-gray-700 font-medium mb-2">Required Skills / Keywords</label>

                        <!-- Hidden input to store skills as CSV -->
                        <input type="hidden" name="skills" :value="skills.join(',')" />

                        <!-- Tag display + input -->
                        <div class="flex flex-wrap border rounded-lg px-3 py-2 focus-within:ring focus-within:ring-blue-200">
                            <template x-for="(tag, index) in skills" :key="index">
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm mr-2 mb-2 flex items-center">
                <span x-text="tag"></span>
                <button type="button" class="ml-1 text-blue-500 hover:text-blue-700" @click="removeTag(index)">×</button>
            </span>
                            </template>

                            <input
                                x-model="input"
                                @keydown.space.prevent="addTag()"
                                @keydown.enter.prevent="addTag()"
                                type="text"
                                placeholder="Type and press space"
                                class="flex-grow border-none focus:outline-none text-sm"
                            />
                        </div>

                        <small class="text-gray-500">Press space to add a skill keyword</small>
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

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Salary Range</label>
                            <input type="number" name="salary_min"
                                   value="{{ old('salary_range', $job->salary_range ?? '') }}"
                                   class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                                   placeholder="Salary Range" required>
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

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        function tagInput() {
            return {
                input: '',
                skills: {!! json_encode(explode(',', old('skills', $job->skills ?? ''))) !!},
                addTag() {
                    const tag = this.input.trim();
                    if (tag && !this.skills.includes(tag)) {
                        this.skills.push(tag);
                    }
                    this.input = '';
                },
                removeTag(index) {
                    this.skills.splice(index, 1);
                }
            }
        }
    </script>


</x-app-layout>
