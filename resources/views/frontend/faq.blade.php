@extends('component.main')
@section('content')
<style>
    .accordion-item {
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .accordion-button {
        width: 100%;
        padding: 15px;
        text-align: left;
        background: #f8f9fa;
        border: none;
        cursor: pointer;
        font-weight: 500;
        position: relative;
    }

    .accordion-button::after {
        content: '+';
        position: absolute;
        right: 15px;
        font-size: 18px;
    }

    .accordion-button[aria-expanded="true"]::after {
        content: '-';
    }

    .accordion-content {
        display: none;
        padding: 15px;
        background: #fff;
    }

    .accordion-body {
        line-height: 1.6;
    }
</style>

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
        {{-- <section class="wsus__faq mt_45 mb_45">
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
        </section> --}}
        <!--=========FAQ END==========-->
        <section class="wsus__faq mt_45 mb_45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wsus__faq_accordian">
                            <div id="wsus__accordian">
                                @forelse ($faqs as $f)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading-{{ $loop->index }}">
                                            <button class="accordion-button" type="button"
                                                aria-expanded="false"
                                                aria-controls="flush-collapse-{{ $loop->index }}">
                                                {{ $f->question }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse-{{ $loop->index }}"
                                            class="accordion-content"
                                            aria-labelledby="flush-heading-{{ $loop->index }}">
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


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const accordionButtons = document.querySelectorAll('.accordion-button');

                accordionButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const isExpanded = this.getAttribute('aria-expanded') === 'true';
                        this.setAttribute('aria-expanded', !isExpanded);

                        const targetId = this.getAttribute('aria-controls');
                        const targetContent = document.getElementById(targetId);

                        if (isExpanded) {
                            targetContent.style.display = 'none';
                        } else {
                            targetContent.style.display = 'block';
                        }
                    });
                });
            });
        </script>
    @endsection
