@extends('component.main')
@section('content')


 <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('asset/img/carousel-5.jpeg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Web Development</h1>

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
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    <i class="fas fa-th-large"></i>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <i class="far fa-stream"></i>
                  </button>
                </li>
              </ul>
              <div class="wsus__property_top_select">
                                <select class="select_2" id="sortingId">
                    <option value="1">Default Order</option>
                    <option value="2">Most Views</option>
                    <option value="3">Featured</option>
                    <option value="4">Top</option>
                    <option value="5">New</option>
                    <option value="6">Urgent</option>
                    <option value="7">Oldest</option>
                </select>
                              </div>
            </div>
          </div>


                   </div>
                                    </div>
                                    </div>
                                </div>



                    <div class="col-12">
            <div class="wsus__pagination d-flex justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">


    <li class="page-item"><a class="page-link active" href="javascript:;">1</a></li>
    <li class="page-item"><a class="page-link" href="web_development.html?page_type=list_view&amp;page=2">2</a></li>

                    <li class="page-item">
                <a class="page-link" href="web_development.html?page_type=list_view&amp;page=2" aria-label="Next">
                  <i class="far fa-long-arrow-alt-right"></i>
                </a>
            </li>


      </ul>
    </nav>
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
