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




@endsection
