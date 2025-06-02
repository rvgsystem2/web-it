@extends('component.main')
@section('content')



  <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('asset/img/carousel-6.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Interior & Exterior Design</h1>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Navbar & Carousel End -->






<!--=====App PAGE START=====-->
<section class="wsus__property_page mt_45 mb_45">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <div class="row">
          <div class="col-12">
            <div class="wsus__property_topbar d-flex justify-content-between mb-4">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">


              </ul>

                <img src="{{asset('asset/img/first_floor.jpg')}}" alt="First Floor Plan" width="400" height="500">
                <img src="{{asset('asset/img/Northelevation.jpg')}}" alt="North Elevation" width="400" height="500">
                <img src="{{asset('asset/img/Ground_floor.jpg')}}" alt="Ground Floor Plan" width="400" height="500">





                    <div class="col-12">
            <div class="wsus__pagination d-flex justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">

      </ul>
    </nav>
  </div>

      </div>
    </div>
  </div>
</section>
<!--=====App PAGE END=====-->

<script>
    (function($) {
    "use strict";
    $(document).ready(function () {
        $("#sortingId").on("change",function(){
            var id=$(this).val();

            var isSortingId='0'
            var query_url='http://cybrexus.com/services?page_type=list_view';

            if(isSortingId==0){
                var sorting_id="&sorting_id="+id;
                query_url += sorting_id;
            }else{
                    var href = new URL(query_url);
                href.searchParams.set('sorting_id', id);
                query_url=href.toString()
            }

            window.location.href = query_url;
        })

    });

    })(jQuery);
</script>








<script src="user/js/cookieconsent.min.js"></script>

<script>
window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"normal","colors":{"popup":{"background":"#184dec","text":"#fafafa !important","border":"#0a58d6"},"button":{"background":"#fffceb","text":"#000000"}},"content":{"href":"http://cybrexus.com/privacy-policy","message":"We are committed to protecting your privacy","link":"More Info","button":"Yes"}})});
</script>



  <!-- Footer Start -->


    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class=" me-2"></i>Cybrexus</h1>
                        </a>
                        <p class="mt-3 mb-4">Please feel free to contact us at any time by email or phone!</p>
                        <form action="">

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
                                <p class="mb-0">92,Meenakshi Layout, Bengaluru, KA, IND</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">Support@cybrexus.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+91 9019464748</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>

                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">INFORMATION</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Blog </a>
                                <a class="text-light mb-2" href="Privacy_Policy.php"><i class="bi bi-arrow-right text-primary me-2"></i>Privacy Policy</a>
                                <a class="text-light mb-2" href="Term&Conditions.php"><i class="bi bi-arrow-right text-primary me-2"></i>Terms & Condition</a>
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
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"></a> All Rights Reserved. Designed by <a class="text-white border-bottom" href="https://www.cybrexus.com/">CYBREXUS</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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






@endsection
