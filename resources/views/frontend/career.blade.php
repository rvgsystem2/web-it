@extends('component.main')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            line-height: 1.6;
            color: var(--text);
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            margin-top: 40px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--dark));
            color: white;
            padding: 80px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
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

        header .container {
            position: relative;
            z-index: 1;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-accent {
            background: var(--accent);
        }

        .btn-accent:hover {
            background: #c0392b;
        }

        /* Why Join Us Section */
        .why-join {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .benefit-card {
            background: var(--light);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .benefit-icon {
            font-size: 3rem;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .benefit-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Open Positions */
        .open-positions {
            padding: 80px 0;
            background: #f5f7fa;
        }

        .position-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 5px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--secondary);
            color: white;
            border-color: var(--secondary);
        }

        .positions-list {
            margin-top: 30px;
        }

        .position-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .position-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .position-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .position-meta {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .position-meta span {
            margin-right: 20px;
            display: flex;
            align-items: center;
        }

        .position-meta i {
            margin-right: 5px;
        }

        .position-card .btn {
            padding: 8px 20px;
            font-size: 0.9rem;
        }

        /* Culture Section */
        .culture {
            padding: 80px 0;
            background: white;
        }

        .culture-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .culture-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .culture-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .culture-text h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .culture-text p {
            margin-bottom: 20px;
            color: var(--text);
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background: #f5f7fa;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
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

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 5px;
            color: var(--primary);
        }

        .author-info p {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary), var(--dark));
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bdc3c7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }

            .culture-content {
                grid-template-columns: 1fr;
            }

            .culture-image {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <!-- Header/Hero Section -->
    <header>
        <div class="container">
            <h1>Build Your Future With Cybrexus</h1>
            <p>Join our team of innovators and help shape the future of technology. At Cybrexus, we're building solutions that matter.</p>
            <a href="#positions" class="btn btn-accent">View Open Positions</a>
            <a href="{{ route('dashboard') }}" class="btn btn-accent"> <i class="fas fa-user space-x-2"></i> Login</a>
        </div>
    </header>

    <!-- Why Join Us Section -->
    <section class="why-join">
        <div class="container">
            <div class="section-title">
                <h2>Why Join Cybrexus?</h2>
                <p>We're more than just a workplace. We're a community of passionate professionals dedicated to excellence.</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Growth Opportunities</h3>
                    <p>Continuous learning with training programs, conferences, and mentorship to accelerate your career.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaborative Culture</h3>
                    <p>Work with brilliant minds in an environment that values teamwork and open communication.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Work-Life Balance</h3>
                    <p>Flexible schedules, remote options, and generous time-off policies to keep you at your best.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Competitive Benefits</h3>
                    <p>Comprehensive health coverage, retirement plans, and performance bonuses that reward your hard work.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovative Projects</h3>
                    <p>Work on cutting-edge technologies and challenging projects that make a real impact.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Impact</h3>
                    <p>Our solutions reach clients worldwide, giving your work international visibility and significance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="open-positions" id="positions">
        <div class="container">
            <div class="section-title">
                <h2>Open Positions</h2>
                <p>Explore our current job openings and find the perfect fit for your skills and aspirations.</p>
            </div>

            <form action="{{route('career')}}">
                <input type="text" name="keywords" placeholder="Keywords" >
                <button type="submit"  class="filter-btn" data-filter="engineering">Search</button>
            </form>
            <div class="position-filter">
                <a href="{{route('career')}}" class="filter-btn active" data-filter="all">All Positions</a>

                @foreach($categories as $category)
                    <form action="{{route('career')}}">
                        <input type="hidden" name="slug" value="{{$category->slug}}">
                    <button type="submit"  class="filter-btn" data-filter="engineering">{{$category->name}}</button>
                    </form>
                @endforeach

            </div>

            <div class="positions-list">
                @foreach($jobs as $job)
                    <div class="position-card" data-category="engineering">
                        <h3>{{$job->title}}</h3>
                        <div class="position-meta">
                            <span><i class="fas fa-map-marker-alt"></i> {{$job->location}}</span>
                            <span><i class="fas fa-briefcase"></i> {{$job->job_type}}</span>
                            <span><i class="fas fa-clock"></i> {{$job->created_at->diffForHumans()}}</span>
                            @if($job->salary_range)
                                <span><i class="fas fa-clock"></i> {{$job->salary_range}}</span>
                            @endif
                            <span><i class="fas fa-skill"></i> skills: </span>
                            @php
                                $skills = preg_split('/[\s,]+/', $job->skills);
                            @endphp
                            @foreach($skills as $value)
                                @if(!empty($value))
                                    <span class="badge bg-primary me-2 mt-2 mb-2">{{ $value }}</span>
                                @endif
                            @endforeach
                        </div>
                        <p>{!! $job->description !!}</p>
                        @if(auth()->check())
                            @php
                                $ifExists = \App\Models\JobApplication::where('job_id', $job->id)->where('user_id', auth()->user()->id)->exists();
                            @endphp
                            <button class="btn btn-success" disabled>Applied</button>
                        @else
                            <a href="{{route('applyForJob', ['job'=> $job->id])}}" class="btn">Apply Now</a>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Culture Section -->
    <section class="culture">
        <div class="container">
            <div class="culture-content">
                <div class="culture-text">
                    <h2>Our Culture</h2>
                    <p>At Cybrexus, we foster a culture of innovation, collaboration, and continuous learning. We believe that great ideas can come from anywhere, and we empower every team member to contribute.</p>
                    <p>Our values guide everything we do: Integrity, Excellence, Collaboration, and Customer Focus. We're not just building products - we're building relationships and making a difference.</p>
                    <p>We celebrate diversity and inclusion, knowing that different perspectives lead to better solutions. Our team comes from all walks of life, united by a shared passion for technology and problem-solving.</p>
                    <a href="#" class="btn">Learn More About Us</a>
                </div>
                <div class="culture-image">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cybrexus Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Team Says</h2>
                <p>Hear from current Cybrexus employees about their experiences.</p>
            </div>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>I've grown more in my two years at Cybrexus than in my previous five years combined. The opportunities to learn and take on new challenges are endless.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Senior Developer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>The culture here is amazing. Everyone is supportive and genuinely wants to see you succeed. I've never worked somewhere that values employees this much.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen">
                        </div>
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>What I love about Cybrexus is that my work actually matters. I can see the direct impact of my contributions on our products and customers.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Patel">
                        </div>
                        <div class="author-info">
                            <h4>Priya Patel</h4>
                            <p>Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Join Our Team?</h2>
            <p>If you don't see the perfect role listed, we'd still love to hear from you. Send us your resume and tell us how you can contribute to Cybrexus.</p>
            <a href="#" class="btn btn-accent">Submit General Application</a>
        </div>
    </section>


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
