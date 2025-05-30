@extends('component.main')
@section('content')


<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{asset('asset/img/carousel-10.jpg')}}" alt="Image">
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
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                                                <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-2" aria-expanded="false" aria-controls="flush-collapseOne-2">
                                    What does Cybrexus do?
                                </button>
                            </h2>
                            <div id="flush-collapseOne-2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-2" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <p>Cybrexus as a global information technology, consulting and business process services company. We harness the power of computing, Interior design, cloud, analytics and emerging technologies to help our clients adapt to the digital world and make them successful.Together, we discover ideas and connect the dots to build a better and a bold new future.<br></p>
                                </div>
                            </div>
                        </div>
                                                <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-3" aria-expanded="false" aria-controls="flush-collapseOne-3">
                                    Where is Cybrexus located?
                                </button>
                            </h2>
                            <div id="flush-collapseOne-3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-3" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <p>Cybrexus headquarters is in Bengaluru, India and it has operations across Patna, Bengaluru<br></p>
                                </div>
                            </div>
                        </div>
                                                <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-4" aria-expanded="false" aria-controls="flush-collapseOne-4">
                                    What is the address of the registered office of Cybrexus?
                                </button>
                            </h2>
                            <div id="flush-collapseOne-4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <p>Cybrexus registered office is located at Zeta 1, Greater Noida, UP, IND<br></p>
                                </div>
                            </div>
                        </div>
                                                <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-5" aria-expanded="false" aria-controls="flush-collapseOne-5">
                                    When does Cybrexus’s financial year end?
                                </button>
                            </h2>
                            <div id="flush-collapseOne-5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <p>Cybrexus Limited’s financial year ends on March 31.<br></p>
                                </div>
                            </div>
                        </div>
                                                <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-7" aria-expanded="false" aria-controls="flush-collapseOne-7">
                                    Do you have another question that hasn’t been answered?
                                </button>
                            </h2>
                            <div id="flush-collapseOne-7" class="accordion-collapse collapse" aria-labelledby="flush-headingOne-7" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <p>Please submit your question using the form below. Fields marked with an * are required<br></p>

                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--=========FAQ END==========-->












<script src="user/js/cookieconsent.min.js"></script>

<script>
window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"normal","colors":{"popup":{"background":"#184dec","text":"#fafafa !important","border":"#0a58d6"},"button":{"background":"#fffceb","text":"#000000"}},"content":{"href":"http://cybrexus.com/privacy-policy","message":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the when an unknown printer took.","link":"More Info","button":"Yes"}})});
</script>





@endsection
