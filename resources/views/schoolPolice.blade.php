@extends('layouts.app')
@section('content')
<div class="school_police_page">
    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>

    <div class="row pt-5 max-h mb-5">
        <div class="col-12 position-relative">
            <div class="">
                <div class="px-3 py-4  light_gray_bg rounded-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 text-center text-md-start text-lg-start">
                                <h2 class="text-capitalize first_color">School Agreements</h2>
                                <p class="ps-2 lh-lg w-content-50 Open_Sans_font fw-semibold text-center text-md-start text-lg-start">
                                    {!!$police->head!!}
                                </p>
                            </div>    
                        </div>
                        <!--<div class="col-md-6">
                            <img src="{{asset($police->head_img)}}" alt="" style="max-height: 400px;
                            text-align: right;
                            float: right;"
                            class="img-fluid rounded-3 mt-4">
                        </div>-->
                    </div>
                </div>
            </div>
         </div>
    </div>

    <div class="container mb-5 pb-2">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row">
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                <div id="carouselExample22" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset($police->f_p_img)}}" alt="" class="h-100 rounded-3">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset($police->f_p_img)}}" alt="" class="h-100 rounded-3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample22" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample22" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    
                  </div>
    
                {{-- <img src="{{asset($police->f_p_img)}}" alt="" class="h-100 rounded-3"> --}}
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!!$police->f_p!!}                
                </p>
            </div>
        </div>
    </div>

    <div class="second_color_bg py-4">
        <div class="container">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">

                <div class="col-12 mt-4">
                    <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!!$police->second_p!!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-2 py-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row">
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg"  style="margin: auto">
                            <div id="carouselExample44" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset($police->third_p_img[0])}}" alt="" class="h-100 rounded-3">
                  </div>
                  @foreach ($police->third_p_img as $key => $item)
                  @if ($key !=0)
                  <div class="carousel-item">
                      <img src="{{asset($item)}}" alt="" class="h-100 rounded-3">
                  </div>                                            
                  @endif
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample44" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"> </span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample44" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                
              </div>

             </div>
           
        </div>
    </div>



   <div class="w-100 ">
        <img class="w-100" src="assets/images/assets9.png" alt="">
    </div>

    <div class="container mb-5">
        
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">
           
            <div class="col-12 mt-4">
                <h1 class="pb-4 m-0">To Parents</h1>

                <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!!$police->parent_h!!}
                </p>

                <div class="col-12 mt-4">
                    <img src="{{asset($police->parent_img)}}" alt="" class="h-50 w-100 rounded-3">
                </div>
            </div>
        </div>
    </div>

    <div class="second_color_bg py-4">
        <div class="container">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">

                <div class="col-12 mt-4">
                    <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!!$police->parent_p!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection