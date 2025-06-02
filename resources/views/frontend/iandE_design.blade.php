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
<section class="wsus__property_page mt-5 mb-5">
    <div class="container">
      <div class="row">
        <!-- Main content column -->
        <div class="col-12 col-xl-8">
          <div class="row">
            <div class="col-12">
              <!-- Top bar -->
              <div class="wsus__property_topbar d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <ul class="nav nav-pills mb-2 mb-md-0" id="pills-tab" role="tablist">
                  <!-- Tabs go here -->
                </ul>
              </div>
            </div>

            <!-- Floor/Elevation Images -->
            <div class="col-12">
              <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                  <img src="{{ asset('asset/img/first_floor.jpg') }}" alt="First Floor Plan" class="img-fluid rounded shadow-sm w-100 h-auto">
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <img src="{{ asset('asset/img/Northelevation.jpg') }}" alt="North Elevation" class="img-fluid rounded shadow-sm w-100 h-auto">
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <img src="{{ asset('asset/img/Ground_floor.jpg') }}" alt="Ground Floor Plan" class="img-fluid rounded shadow-sm w-100 h-auto">
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <div class="col-12 mt-5">
              <div class="wsus__pagination d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <!-- Pagination items go here -->
                  </ul>
                </nav>
              </div>
            </div>
          </div> <!-- inner row -->
        </div> <!-- col-xl-8 -->
      </div> <!-- row -->
    </div> <!-- container -->
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




@endsection
