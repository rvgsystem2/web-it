@extends('component.main')
@section('content')

{{-- hero section --}}
<div class="container-fluid position-relative p-0">
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($banners as $banner)
            <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                <img class="w-100" src="{{asset('storage/'. $banner->banner)}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">

                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{$banner->title}}</h1>

                    </div>
                </div>
            </div>
        @endforeach
{{--        <div class="carousel-item">--}}
{{--            <img class="w-100" src="{{asset('asset/img/carousel-1.jpg')}}" alt="Image">--}}
{{--            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
{{--                <div class="p-3" style="max-width: 900px;">--}}

{{--                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img class="w-100" src="{{asset('asset/img/carousel-2.jpg')}}" alt="Image">--}}
{{--            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
{{--                <div class="p-3" style="max-width: 900px;">--}}

{{--                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
  <!-- Full Screen Search Start -->
  <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            @forelse ($abouts as $about)
                 <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">

                        <h1 class="mb-0">{{ $about->title }}</h1>
                    </div>
                    <p class="mb-4">{{ $about->description }}</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ $about->f_1 }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ $about->f_2 }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ $about->f_3 }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ $about->f_4 }}</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ $about->call_to_title }}</h5>
                            <h4 class="text-primary mb-0">{{ $about->call_to_number }}</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('storage/' . $about->image)}}" style="object-fit: cover;">
                    </div>

                </div>
            </div>
            @empty
                <p>No about information available.</p>
            @endforelse
           
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            @forelse ($chooses as $c)
                  <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ $c->title }}</h5>
                <h1 class="mb-0">{{ $c->sub_title }}</h1>
            </div>
            @empty
                <p>No choose information available.</p>
            @endforelse
          
            <div class="row g-5">
                <div class="col-lg-4">
                    @forelse ($choosesFeatures->take(2) as $f)
                         <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="{{ $f->icon }} text-white"></i>
                            </div>
                            <h4>{{ $f->title }}</h4>
                            <p class="mb-0">{{ $f->description }}</p>
                        </div>
                      
                    </div>
                    @empty
                        <p>No choose feature information available.</p>
                    @endforelse
                   
                </div>
                @forelse ($chooses as $cc)
                      <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{asset('storage/' . $cc->image)}}" style="object-fit: cover;">
                    </div>
                </div>
                @empty
                    <p>No choose feature information available.</p>
                @endforelse
              
                <div class="col-lg-4">
                    @forelse ($choosesFeatures->skip(2)->take(2) as $f)
                         <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="{{ $f->icon }} text-white"></i>
                            </div>
                            <h4>{{ $f->title }}</h4>
                            <p class="mb-0">{{ $f->description }}</p>
                        </div>
                      
                    </div>
                    @empty
                        <p>No choose feature information available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            @forelse ($servicesTitle as $title)
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{ $title->title }}</h5>
                    <h1 class="mb-0">{{ $title->sub_title }}</h1>
                </div>
           
            @empty
                <p>No service title available.</p>
            @endforelse
          
               
            <div class="row g-5">
                @forelse ($serviceFeature as $sf)
                      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="{{ $sf->icon }} text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ $sf->title }}</h4>
                        <p class="m-0">{{ $sf->sub_title }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @empty
                    <p>No service feature information available.</p>
                @endforelse
             
           
               
             

            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Support Hours (10:00 AM- 6:00 PM IST) MON-FRI </h5>
                        </div>
                    </div>
                    <p class="mb-4">Please fill out this form with your contact details and project requirements and we will get back to you as soon as possible.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+91 7020893552</h4>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">

						<!-- FormSPark to collect the information -->

                     <form action="https://submit-form.com/AJWqbf1E" method="post">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="phone" name ="phone" class="form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select type="choose" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">App Development</option>
                                        <option value="2">Business Solutions</option>
                                        <option value="3">Business Process</option>
                                        <option value="4">Cyber Security</option>
                                        <option value="5">Web Development</option>
                                        <option value="6">Interior & Exterior Design</option>
                                        <option value="6">Others</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
               @forelse ($testimonials as $test)
                    <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{asset('storage/'.$test->image)}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">{{ $test->name }}</h4>
                            <small class="text-uppercase">{{ $test->title }}</small>
                             <small class="text-uppercase">{{ $test->company }}</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{ $test->message }}
                    </div>
                </div>  
               @empty
                   
               @endforelse
               
               
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
