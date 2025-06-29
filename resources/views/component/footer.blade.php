<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="/" class="navbar-brand">
                        <h1 class="m-0 text-white"><i class="me-2"></i>Cybrexus</h1>
                    </a>
                    <p class="mt-3 mb-4">We build a better future with the tech</p>
                    <form action="">
                        <!-- Optional: Add form fields if needed -->
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Zeta 1, Greater Noida, UP, IND 201306</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">Support@cybrexus.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+91 7020893552</p>
                        </div>
                        @php
                            $links = \App\Models\SocialLink::all();
                        @endphp
                        <div class="d-flex mt-4">
                            @foreach($links as $link)
                                <a class="btn btn-primary btn-square me-2" href="{{$link->url}}"><i class="{{$link->icon}}"></i></a>
                            @endforeach
                            <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/people/Cybrexus/61551280762371/?mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/cybrexus"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{route('service')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light mb-2" href="{{route('team')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                            <a class="text-light mb-2" href="{{route('blog')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Information</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            <a class="text-light mb-2" href="{{route('blog')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                            <a class="text-light mb-2" href="{{route('privacy_policy')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Privacy Policy</a>
                            <a class="text-light mb-2" href="{{route('terms_condition')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="/">CYBREXUS</a>. All Rights Reserved. Designed by <a class="text-white border-bottom" href="https://www.cybrexus.com/">CYBREXUS</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="/" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
