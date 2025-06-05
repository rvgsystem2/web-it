@extends('component.main')
@section('content')

 <div class="container-fluid position-relative p-0">

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{ $blog->title }}</h1>

                </div>
            </div>
        </div>
    </div>



<!-- Blog Details Start -->
<div class="container py-5">
    <div class="row g-5">
        <!-- Main Blog -->
        <div class="col-lg-8">
            <div class="mb-5">
                <img class="img-fluid w-100 rounded" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
            </div>
            <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $blog->author }}</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $blog->created_at->format('d M, Y') }}</small>
            </div>
            <h2 class="mb-4">{{ $blog->title }}</h2>
            <p class="mb-4">{{ $blog->short_msg }}</p>
            <div>{!! nl2br(e($blog->content)) !!}</div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="mb-5">
                <h3 class="mb-4">Recent Posts</h3>
                @forelse ($recentBlogs as $recent)
                    <div class="d-flex mb-3">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $recent->image) }}" style="width: 80px; height: 80px; object-fit: cover;" alt="{{ $recent->title }}">
                        <div class="ps-3">
                            <h6 class="mb-2"><a href="{{ route('blog.details', $recent->id) }}" class="text-dark">{{ Str::limit($recent->title, 40) }}</a></h6>
                            <small class="text-muted">{{ $recent->created_at->format('d M, Y') }}</small>
                        </div>
                    </div>
                @empty
                    <p>No recent posts found.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- Blog Details End -->

@endsection
