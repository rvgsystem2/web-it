@extends('component.main')
@section('content')

    <!-- Profile Header -->
    <div class="container-fluid py-5 bg-primary text-white text-center">
        <div class="container">
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
                        <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone ?? '' }}">
                    </div>

                    <!-- Profile Picture -->
                    <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label><br>
                        @if(Auth::user()->profile_picture)
                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" width="100" class="mb-2 rounded">
                        @endif
                        <input type="file" name="profile_picture" class="form-control">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-5">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
