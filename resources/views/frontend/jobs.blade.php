<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victory Jobs - Find Your Dream Job</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <style>
            :root {
                --primary-50: #e0f7fa;
                --primary-100: #b2ebf2;
                --primary-200: #80deea;
                --primary-300: #4dd0e1;
                --primary-400: #26c6da;
                --primary-500: #00bcd4;
                --primary-600: #00acc1;
                --primary-700: #0097a7;
                --primary-800: #00838f;
                --primary-900: #006064;

                --secondary-50: #f3f5f7;
                --secondary-100: #e1e5ea;
                --secondary-200: #cdd4dc;
                --secondary-300: #b8c2ce;
                --secondary-400: #a8b5c3;
                --secondary-500: #98a8b9;
                --secondary-600: #8a9aab;
                --secondary-700: #798897;
                --secondary-800: #697785;
                --secondary-900: #545d68;

                --light-bg: #f8fafc;
                --dark-bg: #1e293b;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background-color: var(--light-bg);
                color: #334155;
            }

            .navbar-brand {
                font-weight: 700;
                color: var(--primary-600) !important;
                font-size: 1.5rem;
            }

            .hero-section {
                background: linear-gradient(135deg, var(--primary-500) 0%, var(--primary-700) 100%);
                padding: 6rem 0 5rem;
                position: relative;
                overflow: hidden;
            }

            .hero-section::before {
                content: '';
                position: absolute;
                bottom: -50px;
                left: 0;
                right: 0;
                height: 100px;
                background: var(--light-bg);
                transform: skewY(-2deg);
                z-index: 1;
            }

            .job-card {
                transition: all 0.3s ease;
                border-radius: 0.75rem;
                border: none;
                background: white;
                height: 100%;
                position: relative;
                overflow: hidden;
            }

            .job-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }

            .job-card::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 4px;
                background: var(--primary-400);
                transform: scaleX(0);
                transition: transform 0.3s ease;
            }

            .job-card:hover::after {
                transform: scaleX(1);
            }

            .job-type-badge {
                font-size: 0.7rem;
                padding: 0.3rem 0.6rem;
                border-radius: 0.25rem;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .full-time {
                background-color: rgba(16, 185, 129, 0.1);
                color: #10b981;
            }

            .part-time {
                background-color: rgba(245, 158, 11, 0.1);
                color: #f59e0b;
            }

            .freelance {
                background-color: rgba(99, 102, 241, 0.1);
                color: #6366f1;
            }

            .remote {
                background-color: rgba(239, 68, 68, 0.1);
                color: #ef4444;
            }

            .company-logo {
                width: 60px;
                height: 60px;
                object-fit: contain;
                border-radius: 0.5rem;
                border: 1px solid #e5e7eb;
                background: white;
                padding: 0.5rem;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            }

            .filter-card {
                background: white;
                border-radius: 0.75rem;
                padding: 1.5rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                border: 1px solid #e5e7eb;
            }

            .search-btn {
                background-color: var(--primary-600);
                border: none;
                padding: 0.6rem 1.5rem;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .search-btn:hover {
                background-color: var(--primary-700);
                transform: translateY(-2px);
            }

            .section-title {
                position: relative;
                padding-bottom: 0.75rem;
                margin-bottom: 1.5rem;
                font-weight: 600;
                color: var(--primary-700);
            }

            .section-title:after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 40px;
                height: 4px;
                background: linear-gradient(90deg, var(--primary-500), var(--primary-300));
                border-radius: 2px;
            }

            .hero-title {
                font-weight: 700;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .hero-subtitle {
                opacity: 0.9;
                font-weight: 400;
            }

            .nav-link {
                font-weight: 500;
                color: var(--secondary-700);
                padding: 0.5rem 1rem;
                position: relative;
            }

            .nav-link:hover {
                color: var(--primary-600);
            }

            .nav-link.active {
                color: var(--primary-600);
            }

            .nav-link.active::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 1rem;
                right: 1rem;
                height: 2px;
                background: var(--primary-400);
                border-radius: 2px;
            }

            .btn-primary {
                background-color: var(--primary-600);
                border-color: var(--primary-600);
            }

            .btn-primary:hover {
                background-color: var(--primary-700);
                border-color: var(--primary-700);
            }

            .btn-outline-primary {
                color: var(--primary-600);
                border-color: var(--primary-600);
            }

            .btn-outline-primary:hover {
                background-color: var(--primary-600);
                border-color: var(--primary-600);
            }

            .pagination .page-item.active .page-link {
                background-color: var(--primary-600);
                border-color: var(--primary-600);
            }

            .pagination .page-link {
                color: var(--primary-600);
            }

            .cta-section {
                background: linear-gradient(135deg, var(--primary-50) 0%, var(--primary-100) 100%);
                padding: 4rem 0;
                position: relative;
            }

            .footer {
                background: var(--dark-bg);
                color: white;
                padding: 4rem 0 2rem;
            }

            .footer a {
                color: #cbd5e1;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .footer a:hover {
                color: white;
                padding-left: 3px;
            }

            .footer h5,
            .footer h6 {
                color: white;
                margin-bottom: 1.25rem;
            }

            .footer h6 {
                font-size: 1rem;
                font-weight: 500;
            }

            /* Responsive adjustments */
            @media (max-width: 991.98px) {
                .hero-section {
                    padding: 5rem 0 4rem;
                }

                .hero-title {
                    font-size: 2.25rem;
                }

                .filter-card {
                    margin-bottom: 2rem;
                }
            }

            @media (max-width: 767.98px) {
                .hero-section {
                    padding: 4rem 0 3rem;
                }

                .hero-title {
                    font-size: 2rem;
                }

                .hero-subtitle {
                    font-size: 1rem;
                }

                .job-card {
                    margin-bottom: 1.5rem;
                }

                .navbar-brand {
                    font-size: 1.25rem;
                }
            }

            @media (max-width: 575.98px) {
                .hero-section {
                    padding: 3rem 0 2.5rem;
                }

                .hero-title {
                    font-size: 1.75rem;
                }

                .search-btn {
                    width: 100%;
                    margin-top: 0.5rem;
                }

                .section-title {
                    font-size: 1.25rem;
                }
            }
        </style>
</head>
<body>
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-shield-alt me-2"></i>Cybrexus
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('jobs')}}">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Companies</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i> Account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('employee')}}">Employer Dashboard</a></li>
                            </ul>
                        </li>
                      <!-- Post Job Button -->
<!-- Post a Job Button -->
<li class="nav-item ms-lg-3 mt-2 mt-lg-0">
    <a href="#" class="btn btn-primary rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#postJobModal">
        <i class="fas fa-plus me-1"></i> Post a Job
    </a>
</li>

<!-- Post Job Modal -->
<div class="modal fade" id="postJobModal" tabindex="-1" aria-labelledby="postJobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="postJobModalLabel">Post New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="jobPostingForm">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="e.g. Frontend Developer" required>
                    </div>

                    <div class="mb-3">
                        <label for="jobCategory" class="form-label">Category</label>
                        <select class="form-select" id="jobCategory" name="jobCategory">
                            <option value="">Select category</option>
                            <option>Technology</option>
                            <option>Marketing</option>
                            <option>Design</option>
                            <option>Finance</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jobDescription" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="jobDescription" name="jobDescription" rows="4" placeholder="Job responsibilities, skills required, etc." required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="jobType" class="form-label">Job Type</label>
                            <select class="form-select" id="jobType" name="jobType">
                                <option value="">Select type</option>
                                <option>Full-time</option>
                                <option>Part-time</option>
                                <option>Contract</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="jobLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="jobLocation" name="jobLocation" placeholder="e.g. Remote, New York">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-4">Post Job</button>
                </div>
            </form>
        </div>
    </div>
</div>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container position-relative z-2">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center text-white">
                        <h1 class="hero-title display-5 fw-bold mb-4">Find Your Dream Tech Job Today</h1>
                        <p class="hero-subtitle lead mb-5">Browse through 10,000+ jobs from top tech companies worldwide.
                            Your next career move starts here.</p>

                        <div class="bg-white rounded-3 p-3 shadow-lg">
                            <div class="row g-2 align-items-center">
                                <div class="col-md-5 mb-2 mb-md-0">
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="fas fa-search text-secondary"></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0 ps-0 py-2"
                                            placeholder="Job title, keywords">
                                    </div>
                                </div>
                                <div class="col-md-5 mb-2 mb-md-0">
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent border-end-0">
                                            <i class="fas fa-map-marker-alt text-secondary"></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0 ps-0 py-2"
                                            placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-md-2 d-grid">
                                    <button class="btn btn-primary rounded-2 py-2">
                                        <i class="fas fa-search me-1"></i> Search
                                    </button>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap justify-content-center mt-3 gap-2">
                                <span class="text-muted small">Popular Searches:</span>
                                <a href="#" class="badge bg-light text-dark small fw-normal me-1">Developer</a>
                                <a href="#" class="badge bg-light text-dark small fw-normal me-1">Designer</a>
                                <a href="#" class="badge bg-light text-dark small fw-normal me-1">Data Scientist</a>
                                <a href="#" class="badge bg-light text-dark small fw-normal">Remote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <main class="py-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Filters Sidebar -->
                    <div class="col-lg-3">
                        <div class="filter-card mb-4">
                            <h5 class="section-title">Filter Jobs</h5>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Keywords</label>
                                <input type="text" class="form-control py-2" placeholder="Job title, company">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Location</label>
                                <input type="text" class="form-control py-2" placeholder="City or country">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Job Type</label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="fulltime" checked>
                                    <label class="form-check-label" for="fulltime">
                                        Full Time
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parttime">
                                    <label class="form-check-label" for="parttime">
                                        Part Time
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="freelance">
                                    <label class="form-check-label" for="freelance">
                                        Freelance
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remote">
                                    <label class="form-check-label" for="remote">
                                        Remote
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Salary Range</label>
                                <select class="form-select py-2">
                                    <option selected>All ranges</option>
                                    <option>$0 - $20,000</option>
                                    <option>$20,000 - $50,000</option>
                                    <option>$50,000 - $100,000</option>
                                    <option>$100,000+</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Experience Level</label>
                                <select class="form-select py-2">
                                    <option selected>All levels</option>
                                    <option>Entry Level</option>
                                    <option>Mid Level</option>
                                    <option>Senior Level</option>
                                    <option>Executive</option>
                                </select>
                            </div>

                            <button class="btn btn-primary w-100 py-2">Apply Filters</button>
                            <button class="btn btn-outline-secondary w-100 mt-2 py-2">Reset All</button>
                        </div>

                        <div class="filter-card">
                            <h5 class="section-title">Job Alerts</h5>
                            <p class="small text-muted">Get notified when new jobs match your search criteria.</p>
                            <div class="mb-3">
                                <input type="email" class="form-control py-2" placeholder="Your email">
                            </div>
                            <button class="btn btn-outline-primary w-100 py-2">Create Alert</button>
                        </div>
                    </div>

                    <!-- Job Listings -->
                    <div class="col-lg-9">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
                            <h5 class="section-title m-0">Latest Job Postings</h5>
                            <div class="d-flex mt-3 mt-md-0">
                                <div class="me-3">
                                    <label class="form-label small text-muted m-0">Sort by:</label>
                                    <select class="form-select form-select-sm border-0 shadow-sm py-1">
                                        <option>Most Recent</option>
                                        <option>Highest Salary</option>
                                        <option>Most Applied</option>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-outline-secondary btn-sm active">
                                        <i class="fas fa-list"></i>
                                    </button>
                                    <button class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-th-large"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <!-- Job Card 1 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="job-card card h-100 shadow-sm">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex mb-3">
                                            <img src="https://via.placeholder.com/60" alt="TechWave"
                                                class="company-logo me-3">
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Senior Frontend Developer</h6>
                                                <p class="small text-muted mb-0">TechWave Inc.</p>
                                                <span class="badge full-time job-type-badge mt-1">Full Time</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-map-marker-alt text-muted me-1"></i> Bangalore
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-clock text-muted me-1"></i> 2 days ago
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-dollar-sign text-muted me-1"></i> $90k - $120k
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-3 flex-grow-1">We're looking for an experienced
                                            frontend developer with React expertise to join our growing team...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-sm btn-outline-primary rounded-pill px-3">View Details</a>
                                            <button class="btn btn-sm btn-link text-danger p-0">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Card 2 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="job-card card h-100 shadow-sm">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex mb-3">
                                            <img src="https://via.placeholder.com/60" alt="Creativo"
                                                class="company-logo me-3">
                                            <div>
                                                <h6 class="mb-1 fw-semibold">UI/UX Designer</h6>
                                                <p class="small text-muted mb-0">Creativo Design Studio</p>
                                                <span class="badge freelance job-type-badge mt-1">Freelance</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-map-marker-alt text-muted me-1"></i> Remote
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-clock text-muted me-1"></i> 1 week ago
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-dollar-sign text-muted me-1"></i> $50 - $80/hr
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-3 flex-grow-1">Join our creative team to design
                                            beautiful interfaces for our global clients. Must have Figma experience...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-sm btn-outline-primary rounded-pill px-3">View Details</a>
                                            <button class="btn btn-sm btn-link text-danger p-0">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Card 3 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="job-card card h-100 shadow-sm">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex mb-3">
                                            <img src="https://via.placeholder.com/60" alt="BuzzHub"
                                                class="company-logo me-3">
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Digital Marketing Manager</h6>
                                                <p class="small text-muted mb-0">BuzzHub Marketing</p>
                                                <span class="badge part-time job-type-badge mt-1">Part Time</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-map-marker-alt text-muted me-1"></i> New York
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-clock text-muted me-1"></i> 3 days ago
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-dollar-sign text-muted me-1"></i> $35k - $45k
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-3 flex-grow-1">Seeking a part-time digital marketing
                                            expert to manage our social media and PPC campaigns...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-sm btn-outline-primary rounded-pill px-3">View Details</a>
                                            <button class="btn btn-sm btn-link text-danger p-0">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Card 4 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="job-card card h-100 shadow-sm">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex mb-3">
                                            <img src="https://via.placeholder.com/60" alt="DataSphere"
                                                class="company-logo me-3">
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Data Scientist</h6>
                                                <p class="small text-muted mb-0">DataSphere Analytics</p>
                                                <span class="badge full-time job-type-badge mt-1">Full Time</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-map-marker-alt text-muted me-1"></i> San Francisco
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-clock text-muted me-1"></i> Just now
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-dollar-sign text-muted me-1"></i> $110k - $150k
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-3 flex-grow-1">Join our AI team to develop
                                            cutting-edge machine learning models. Python and TensorFlow required...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-sm btn-outline-primary rounded-pill px-3">View Details</a>
                                            <button class="btn btn-sm btn-link text-danger p-0">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Card 5 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="job-card card h-100 shadow-sm">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex mb-3">
                                            <img src="https://via.placeholder.com/60" alt="CloudNine"
                                                class="company-logo me-3">
                                            <div>
                                                <h6 class="mb-1 fw-semibold">DevOps Engineer</h6>
                                                <p class="small text-muted mb-0">CloudNine Technologies</p>
                                                <span class="badge full-time job-type-badge mt-1">Full Time</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-map-marker-alt text-muted me-1"></i> Austin
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-clock text-muted me-1"></i> 5 days ago
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-dollar-sign text-muted me-1"></i> $100k - $140k
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-3 flex-grow-1">Looking for a DevOps engineer with AWS
                                            and Kubernetes experience to optimize our cloud infrastructure...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-sm btn-outline-primary rounded-pill px-3">View Details</a>
                                            <button class="btn btn-sm btn-link text-danger p-0">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job Card 6 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="job-card card h-100 shadow-sm">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex mb-3">
                                            <img src="https://via.placeholder.com/60" alt="AppVantage"
                                                class="company-logo me-3">
                                            <div>
                                                <h6 class="mb-1 fw-semibold">Mobile Developer</h6>
                                                <p class="small text-muted mb-0">AppVantage</p>
                                                <span class="badge remote job-type-badge mt-1">Remote</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 mb-3">
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-map-marker-alt text-muted me-1"></i> Worldwide
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-clock text-muted me-1"></i> 1 day ago
                                            </span>
                                            <span class="badge bg-light text-dark small">
                                                <i class="fas fa-dollar-sign text-muted me-1"></i> $80k - $110k
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-3 flex-grow-1">Seeking a Flutter developer to build
                                            cross-platform mobile applications for our product suite...</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-sm btn-outline-primary rounded-pill px-3">View Details</a>
                                            <button class="btn btn-sm btn-link text-danger p-0">
                                                <i class="far fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <nav class="mt-5">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>

        <!-- Call to Action -->
        <section class="cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h3 class="fw-bold mb-3">Are you hiring?</h3>
                        <p class="mb-lg-0">Post your job openings on Cybrexus and reach thousands of qualified tech
                            candidates.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">
                            <i class="fas fa-plus me-2"></i> Post a Job
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Bootstrap JS -->

        <script>
            // Add active class to current nav item
            document.addEventListener('DOMContentLoaded', function() {
                const navItems = document.querySelectorAll('.nav-link');

                navItems.forEach(item => {
                    if (item.href === window.location.href) {
                        item.classList.add('active');
                    }
                });

                // Toggle favorite button
                const favoriteButtons = document.querySelectorAll('.btn-link.text-danger');
                favoriteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const icon = this.querySelector('i');
                        if (icon.classList.contains('far')) {
                            icon.classList.remove('far');
                            icon.classList.add('fas');
                            this.classList.add('text-danger');
                        } else {
                            icon.classList.remove('fas');
                            icon.classList.add('far');
                        }
                    });
                });
            });
        </script>

{{-- footer --}}
@include('component.footer')
</body>
</html>
