<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row min-vh-100">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-none d-md-block bg-white border-end shadow-sm">
                <div class="p-4 border-bottom">
                    <h4 class="text-primary fw-bold mb-0">Employer Panel</h4>
                </div>
                <ul class="nav flex-column p-3">
                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark d-flex align-items-center" href="#">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark d-flex align-items-center" href="#">
                            <i class="bi bi-briefcase me-2"></i> My Job Posts
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark d-flex align-items-center" href="#">
                            <i class="bi bi-person-lines-fill me-2"></i> Applications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center" href="#">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-semibold mb-0">Dashboard</h2>
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-light position-relative" aria-label="Notifications">
                            <i class="bi bi-bell fs-5 text-muted"></i>
                            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        <div class="d-flex align-items-center">
                            <img src="https://i.pravatar.cc/40" class="rounded-circle me-2" width="40" height="40" alt="Employer Profile">
                            <span class="fw-medium">Employer Name</span>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Cards -->
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted">Job Posts</h5>
                                <p class="display-6 text-primary fw-bold mb-0">12</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted">Applications</h5>
                                <p class="display-6 text-success fw-bold mb-0">45</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted">Shortlisted</h5>
                                <p class="display-6 text-warning fw-bold mb-0">9</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Applications -->
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white">
                        <h5 class="mb-0 fw-semibold">Recent Applications</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Applicant</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>Frontend Developer</td>
                                        <td><span class="badge bg-success">Pending</span></td>
                                        <td>May 30, 2025</td>
                                    </tr>
                                    <tr>
                                        <td>Jane Smith</td>
                                        <td>UI/UX Designer</td>
                                        <td><span class="badge bg-primary">Shortlisted</span></td>
                                        <td>May 28, 2025</td>
                                    </tr>
                                    <!-- Additional rows can go here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap JS (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
