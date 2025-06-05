@extends('component.main')
@section('content')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('asset/img/carousel-10.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">



                    </div>
                </div>
            </div>

        </div>
        <!--===BREADCRUMB PART START====-->
        <section class="wsus__breadcrumb" style="background: url(asset('asset/img/Aboutus.jpg'));">
            <div class="wsus_bread_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>FAQ</h4>
                            <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===BREADCRUMB PART END====-->


        <!--=========FAQ START============-->
        <section class="wsus__faq mt_45 mb_45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wsus__faq_accordian">
                            <div id="wsus__accordian">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @forelse ($faqs as $f)
                                         <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-2"
                                                aria-expanded="false" aria-controls="flush-collapseOne-2">
                                                {{ $f->question }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne-2" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne-2" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">

                                                {{ $f->answer }}
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <p>No FAQs available.</p>
                                    @endforelse
                                   
                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--=========FAQ END==========-->












        <script src="user/js/cookieconsent.min.js"></script>

        <script>
            window.addEventListener("load", function() {
                window.wpcc.init({
                    "border": "thin",
                    "corners": "normal",
                    "colors": {
                        "popup": {
                            "background": "#184dec",
                            "text": "#fafafa !important",
                            "border": "#0a58d6"
                        },
                        "button": {
                            "background": "#fffceb",
                            "text": "#000000"
                        }
                    },
                    "content": {
                        "href": "http://cybrexus.com/privacy-policy",
                        "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the when an unknown printer took.",
                        "link": "More Info",
                        "button": "Yes"
                    }
                })
            });
        </script>
    @endsection
