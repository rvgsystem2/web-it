@extends('component.main')

@section('content')

    <!-- Profile Header with Image -->
    <div class="container-fluid mt-5 py-5 bg-primary text-white text-center">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            @if(Auth::user()->profile_image)
                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                     width="120" height="120"
                     class="rounded-circle border mb-3 shadow"
                     alt="Profile Image">
            @else
                <div class="bg-light rounded-circle mb-3 d-flex align-items-center justify-content-center"
                     style="width: 120px; height: 120px;">
                    <span class="text-dark">No Image</span>
                </div>
            @endif
            <h1 class="display-4">My Profile</h1>
            <p class="lead">Update your personal information</p>
        </div>
    </div>

    <!-- Profile Form Section -->
    <div class="container py-5">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4>Profile Information</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('userProfile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone_number ?? '' }}">
                    </div>

                    <!-- Profile Picture -->
                    <div class="mb-3">
                        <label for="profile_image" class="form-label">Profile Image</label><br>
                        <input type="file" name="profile_image" class="form-control">
                    </div>

                    <!-- Resume -->
                    <div class="mb-3">
                        <label for="resume" class="form-label">Resume (PDF/DOC)</label><br>
                        @if(Auth::user()->resume_link)
                            <div class="mb-2">
                                <a href="{{ asset('storage/' . Auth::user()->resume_link) }}" target="_blank" class="btn btn-outline-success">
                                    <i class="fas fa-file-alt"></i> View Resume
                                </a>
                            </div>
                        @else
                            <p class="text-muted">No resume uploaded</p>
                        @endif
                        <input type="file" name="resume" class="form-control">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-5">Update</button>
                    </div>
                </form>

                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="post" class="mt-3">
                    @csrf
                    <button class="btn btn-danger px-5">Logout</button>
                </form>
            </div>
        </div>
    </div>

@endsection
