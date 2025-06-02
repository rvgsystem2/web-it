@extends('component.main')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Apply for a {{ $job->title }}</h4>
                    </div>
                    <div class="card-body">
                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>There were some problems with your input:</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('application.store',  $job->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                       id="phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Resume Upload -->
                            <div class="mb-3">
                                <label for="resume" class="form-label">Upload Resume</label>
                                <input type="file" class="form-control @error('resume') is-invalid @enderror"
                                       id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                @error('resume')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Cover Letter -->
                            <div class="mb-3">
                                <label for="cover_letter" class="form-label">Cover Letter</label>
                                <textarea class="form-control @error('cover_letter') is-invalid @enderror"
                                          id="cover_letter" name="cover_letter" rows="5"
                                          placeholder="Write a short message or cover letter...">{{ old('cover_letter') }}</textarea>
                                @error('cover_letter')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
