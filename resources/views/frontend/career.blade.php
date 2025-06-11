@extends('component.main')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --text: #333;
            --text-light: #7f8c8d;
        }

        .benefit-card {
            transition: transform 0.3s ease;
            height: 100%;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
        }

        .benefit-icon {
            font-size: 3rem;
            color: var(--secondary);
        }

        .position-card {
            transition: all 0.3s ease;
        }

        .position-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-text::before {
            content: '"';
            font-size: 4rem;
            color: var(--light);
            position: absolute;
            top: -20px;
            left: -15px;
            z-index: 0;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--dark));
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }

        .btn-accent {
            background: var(--accent);
            color: white;
        }

        .btn-accent:hover {
            background: #c0392b;
            color: white;
        }

        .section-title h2 {
            color: var(--primary);
        }

        .position-meta span {
            margin-right: 1rem;
        }

        .culture-image img {
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--dark));
        }
    </style>

    <!-- Header/Hero Section -->
    <header class="hero-section text-white py-5">
        <div class="container position-relative py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Build Your Future With Cybrexus</h1>
                    <p class="lead mb-5">Join our team of innovators and help shape the future of technology. At Cybrexus, we're building solutions that matter.</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="#positions" class="btn btn-accent btn-lg px-4">View Open Positions</a>
                        @if(auth()->check())
                            <a href="{{ route('userProfile') }}" class="btn btn-light btn-lg px-4">
                                <i class="fas fa-user me-2"></i> Profile
                            </a>
                        @else
                            <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg px-4">
                                <i class="fas fa-user me-2"></i> Login
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Why Join Us Section -->
    <section class="why-join py-5 bg-white">
        <div class="container py-4">
            <div class="section-title text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Why Join Cybrexus?</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">
                    We're more than just a workplace. We're a community of passionate professionals dedicated to excellence.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="benefit-card card h-100 border-0 shadow-sm p-4">
                        <div class="benefit-icon text-center mb-4">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 card-title mb-3">Growth Opportunities</h3>
                            <p class="card-text">
                                Continuous learning with training programs, conferences, and mentorship to accelerate your career.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="benefit-card card h-100 border-0 shadow-sm p-4">
                        <div class="benefit-icon text-center mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 card-title mb-3">Collaborative Culture</h3>
                            <p class="card-text">
                                Work with brilliant minds in an environment that values teamwork and open communication.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="benefit-card card h-100 border-0 shadow-sm p-4">
                        <div class="benefit-icon text-center mb-4">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 card-title mb-3">Work-Life Balance</h3>
                            <p class="card-text">
                                Flexible schedules, remote options, and generous time-off policies to keep you at your best.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="benefit-card card h-100 border-0 shadow-sm p-4">
                        <div class="benefit-icon text-center mb-4">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 card-title mb-3">Competitive Benefits</h3>
                            <p class="card-text">
                                Comprehensive health coverage, retirement plans, and performance bonuses that reward your hard work.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="benefit-card card h-100 border-0 shadow-sm p-4">
                        <div class="benefit-icon text-center mb-4">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 card-title mb-3">Innovative Projects</h3>
                            <p class="card-text">
                                Work on cutting-edge technologies and challenging projects that make a real impact.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="benefit-card card h-100 border-0 shadow-sm p-4">
                        <div class="benefit-icon text-center mb-4">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="card-body text-center">
                            <h3 class="h4 card-title mb-3">Global Impact</h3>
                            <p class="card-text">
                                Our solutions reach clients worldwide, giving your work international visibility and significance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    {{-- <section class="open-positions py-5 bg-light" id="positions">
        <div class="container py-4">
            <div class="section-title text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Open Positions</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">
                    Explore our current job openings and find the perfect fit for your skills and aspirations.
                </p>
            </div>

            <form action="{{route('career')}}">
                <input type="text" name="keywords" placeholder="Keywords" >
                <button type="submit"  class="filter-btn" data-filter="engineering">Search</button>
            </form>
            <div class="position-filter">
                <a href="{{route('career')}}" class="filter-btn {{$slug ? '' : 'active'}} " data-filter="all">All Positions</a>
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <form action="{{route('career')}}" class="row g-2">
                            <div class="col-md-8">
                                <input type="text" name="keywords" class="form-control form-control-lg" placeholder="Keywords">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="position-filter d-flex flex-wrap justify-content-center gap-2 mb-5">
                    <a href="{{route('career')}}" class="btn btn-primary active">All Positions</a>
                    @foreach($categories as $category)
                        <form action="{{route('career')}}">
                            <input type="hidden" name="slug" value="{{$category->slug}}">
                            <button type="submit" class="btn btn-outline-primary {{$slug == $category->slug ? 'group-active' : ''}}">{{$category->name}}</button>
                        </form>
                    @endforeach
                </div>

                <div class="positions-list">
                    @foreach($jobs as $job)
                        <div class="position-card card mb-4 shadow-sm" data-category="engineering">
                            <div class="card-body">
                                <h3 class="h4 card-title">{{$job->title}}</h3>
                                <div class="position-meta d-flex flex-wrap align-items-center mb-3 text-muted">
                                    <span class="me-3"><i class="fas fa-map-marker-alt me-1"></i> {{$job->location}}</span>
                                    <span class="me-3"><i class="fas fa-briefcase me-1"></i> {{$job->job_type}}</span>
                                    <span class="me-3"><i class="fas fa-clock me-1"></i> {{$job->created_at->diffForHumans()}}</span>
                                    @if($job->salary_range)
                                        <span class="me-3"><i class="fas fa-dollar-sign me-1"></i> {{$job->salary_range}}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    @php
                                        $skills = preg_split('/[\s,]+/', $job->skills);
                                    @endphp
                                    @foreach($skills as $value)
                                        @if(!empty($value))
                                            <span class="badge bg-primary me-2 mb-2">{{ $value }}</span>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="card-text mb-4">{!! $job->description !!}</div>
                                @if(auth()->check())
                                    @php
                                        $ifExists = \App\Models\JobApplication::where('job_id', $job->id)->where('user_id', auth()->user()->id)->exists();
                                    @endphp
                                    <button class="btn btn-success" disabled>Applied</button>
                                @else
                                    <a href="{{route('applyForJob', ['job'=> $job->id])}}" class="btn btn-primary">Apply Now</a>
                                @endif
                            </div>
                            <p>{!! $job->description !!}</p>
                            @if(auth()->check())
                                @php
                                    $hasApplied = auth()->user()->jobApplications()->where('job_id', $job->id)->exists();
                                @endphp

                                @if($hasApplied)
                                    <button class="btn btn-success" disabled>Already Applied</button>
                                @else
                                    <a href="{{ route('applyForJob', ['job' => $job->id]) }}" class="btn btn-primary">Apply Now</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn btn-warning">Login to Apply</a>
                            @endif

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}

    <section class="open-positions py-5 bg-light" id="positions">
        <div class="container py-4">
            <div class="section-title text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Open Positions</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">
                    Explore our current job openings and find the perfect fit for your skills and aspirations.
                </p>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <form action="{{route('career')}}" class="row g-2">
                        <div class="col-md-8">
                            <input type="text" name="keywords" class="form-control form-control-lg" placeholder="Keywords" value="{{ request('keywords') }}">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="position-filter d-flex flex-wrap justify-content-center gap-2 mb-5">
                <a href="{{route('career')}}" class="btn btn-outline-primary {{ empty($slug) ? 'active' : '' }}">All Positions</a>
                @foreach($categories as $category)
                    <form action="{{route('career')}}">
                        <input type="hidden" name="slug" value="{{$category->slug}}">
                        <button type="submit" class="btn btn-outline-primary {{ $slug == $category->slug ? 'active' : '' }}">
                            {{$category->name}}
                        </button>
                    </form>
                @endforeach
            </div>

            <div class="positions-list">
                @foreach($jobs as $job)
                    <div class="position-card card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3 class="h4 card-title">{{$job->title}}</h3>
                            <div class="position-meta d-flex flex-wrap align-items-center mb-3 text-muted">
                                <span class="me-3"><i class="fas fa-map-marker-alt me-1"></i> {{$job->location}}</span>
                                <span class="me-3"><i class="fas fa-briefcase me-1"></i> {{$job->job_type}}</span>
                                <span class="me-3"><i class="fas fa-clock me-1"></i> {{$job->created_at->diffForHumans()}}</span>
                                @if($job->salary_range)
                                    <span class="me-3"><i class="fas fa-dollar-sign me-1"></i> {{$job->salary_range}}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                @php
                                    $skills = preg_split('/[\s,]+/', $job->skills);
                                @endphp
                                @foreach($skills as $value)
                                    @if(!empty($value))
                                        <span class="badge bg-primary me-2 mb-2">{{ $value }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <div class="card-text mb-4">{!! $job->description !!}</div>

                            @auth
                                @php
                                    $hasApplied = auth()->user()->jobApplications()->where('job_id', $job->id)->exists();
                                @endphp

                                @if($hasApplied)
                                    <button class="btn btn-success" disabled>Already Applied</button>
                                @else
                                    <a href="{{ route('applyForJob', ['job' => $job->id]) }}" class="btn btn-primary">Apply Now</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn btn-warning">Login to Apply</a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section class="culture py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-1">
                    <div class="culture-image">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cybrexus Team" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Our Culture</h2>
                    <p class="lead mb-4">At Cybrexus, we foster a culture of innovation, collaboration, and continuous learning. We believe that great ideas can come from anywhere, and we empower every team member to contribute.</p>
                    <p class="mb-4">Our values guide everything we do: Integrity, Excellence, Collaboration, and Customer Focus. We're not just building products - we're building relationships and making a difference.</p>
                    <p class="mb-4">We celebrate diversity and inclusion, knowing that different perspectives lead to better solutions. Our team comes from all walks of life, united by a shared passion for technology and problem-solving.</p>
                    <a href="#" class="btn btn-primary btn-lg">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5 bg-light">
        <div class="container py-4">
            <div class="section-title text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">What Our Team Says</h2>
                <p class="lead text-muted mx-auto" style="max-width: 700px;">
                    Hear from current Cybrexus employees about their experiences.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card card h-100 border-0 shadow-sm p-4">
                        <div class="card-body">
                            <div class="testimonial-text position-relative mb-4">
                                <p class="fst-italic">I've grown more in my two years at Cybrexus than in my previous five years combined. The opportunities to learn and take on new challenges are endless.</p>
                            </div>
                            <div class="testimonial-author d-flex align-items-center">
                                <div class="author-img me-3">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson" class="rounded-circle" width="50" height="50">
                                </div>
                                <div class="author-info">
                                    <h4 class="h6 mb-1">Sarah Johnson</h4>
                                    <p class="small text-muted mb-0">Senior Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card card h-100 border-0 shadow-sm p-4">
                        <div class="card-body">
                            <div class="testimonial-text position-relative mb-4">
                                <p class="fst-italic">The culture here is amazing. Everyone is supportive and genuinely wants to see you succeed. I've never worked somewhere that values employees this much.</p>
                            </div>
                            <div class="testimonial-author d-flex align-items-center">
                                <div class="author-img me-3">
                                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen" class="rounded-circle" width="50" height="50">
                                </div>
                                <div class="author-info">
                                    <h4 class="h6 mb-1">Michael Chen</h4>
                                    <p class="small text-muted mb-0">Product Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card card h-100 border-0 shadow-sm p-4">
                        <div class="card-body">
                            <div class="testimonial-text position-relative mb-4">
                                <p class="fst-italic">What I love about Cybrexus is that my work actually matters. I can see the direct impact of my contributions on our products and customers.</p>
                            </div>
                            <div class="testimonial-author d-flex align-items-center">
                                <div class="author-img me-3">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Patel" class="rounded-circle" width="50" height="50">
                                </div>
                                <div class="author-info">
                                    <h4 class="h6 mb-1">Priya Patel</h4>
                                    <p class="small text-muted mb-0">Marketing Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section text-white py-5">
        <div class="container py-4 text-center">
            <h2 class="display-5 fw-bold mb-3">Ready to Join Our Team?</h2>
            <p class="lead mb-4 mx-auto" style="max-width: 700px;">
                If you don't see the perfect role listed, we'd still love to hear from you. Send us your resume and tell us how you can contribute to Cybrexus.
            </p>
            <a href="#" class="btn btn-accent btn-lg px-4">Submit General Application</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple filter functionality for positions
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const positionCards = document.querySelectorAll('.position-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active button
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Filter positions
                    positionCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

@endsection
