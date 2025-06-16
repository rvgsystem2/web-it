<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">
                {{ __('Application Details') }}
            </h2>
            <a href="{{ route('application.index') }}"
               class="text-blue-600 hover:underline font-semibold">← Back to List</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Application #{{ $application->id }}</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-600">Job Title</p>
                        <p class="text-lg font-medium text-gray-900">{{ $application->job->title ?? 'N/A' }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-600">Applicant Name</p>
                        <p class="text-lg font-medium text-gray-900">{{ $application->user->name ?? 'N/A' }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="text-lg font-medium text-gray-900">{{ $application->user->email ?? 'N/A' }}</p>
                    </div>

                    <div>
                        <form action="{{ route('application.status', $application->id) }}" method="POST">
                            @csrf
                            <label class="text-sm text-gray-600 block mb-1" for="status">Status</label>
                            <div class="flex items-center gap-3">
                                <select name="status" id="status" onchange="this.form.submit()" @cannot('change application status') disabled @endcannot
                                class="border border-gray-300 rounded px-3 py-2 text-gray-800 focus:ring focus:ring-blue-200 focus:outline-none">
                                    <option value="applied" {{ $application->status === 'applied' ? 'selected' : '' }}>Applied</option>
                                    <option value="shortlisted" {{ $application->status === 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                                    <option value="rejected" {{ $application->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    <option value="hired" {{ $application->status === 'hired' ? 'selected' : '' }}>Hired</option>
                                </select>
                            </div>
                        </form>
                    </div>


                    <div>
                        <p class="text-sm text-gray-600">Applied At</p>
                        <p class="text-lg font-medium text-gray-900">{{ $application->applied_at->format('Y-m-d H:i A') }}</p>
                    </div>


                    @if ($application->resume)
                        <div>
                            <p class="text-sm text-gray-600">Resume</p>
                            <a @can('view resume') href="{{ asset('storage/' . $application->resume) }}" @endcan target="_blank"
                               class="text-blue-600 hover:underline">📄 View Resume</a>
                        </div>
                    @endif

                    @if ($application->cover_letter)
                        <div class="col-span-1 md:col-span-2">
                            <p class="text-sm text-gray-600 mb-1">Cover Letter</p>
                            <div class="bg-gray-100 p-4 rounded-md text-gray-800 whitespace-pre-line">
                                {{ $application->cover_letter }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
