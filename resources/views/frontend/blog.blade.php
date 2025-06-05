@extends('component.main')
@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Cybrexus Blogs</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @forelse ($blogs as $blog)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/' . $blog->image) }}" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                            href="">Export</a>
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i
                                                    class="far fa-user text-primary me-2"></i>{{ $blog->author }}</small>
                                            <small><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>{{ $blog->created_at->format('d M, Y') }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $blog->title }}</h4>
                                        <p>{{ $blog->short_msg }}</p>
                                        <a class="text-uppercase" href="{{ route('blog.details', $blog->id) }}">Read More <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p>No blogs found.</p>
                            </div>
                        @endforelse

                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    {{-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div> --}}
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @forelse ($categories as $category)
                                <a class="h6 fw-normal bg-light rounded py-2 px-3 mb-2" href="#">
                                    <i class="bi bi-arrow-right me-2"></i>{{ $category }}
                                </a>
                            @empty
                                <p>No categories found.</p>
                            @endforelse
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Posts</h3>
                        </div>
                        @forelse ($recentBlogs as $recent)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('storage/' . $recent->image) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="{{ $recent->title }}">
                                <a href="{{ route('blog.details', $recent->id) }}"
                                    class="h6 fw-semibold d-flex align-items-center bg-light px-3 mb-0">{{ Str::limit($recent->title, 45) }}</a>
                            </div>
                        @empty
                            <p>No recent posts found.</p>
                        @endforelse
                    </div>
                    <!-- Recent Post End -->

                    <!-- Recent Post End -->




                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @forelse ($logos as $logo)
                        <img src="{{ 'storage/' . $logo->image }}" alt="{{ $logo->name }}">
                    @empty
                        <p>No logos found.</p>
                    @endforelse


                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
