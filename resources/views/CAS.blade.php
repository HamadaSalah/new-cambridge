@extends('layouts.app')
@section('content')

<div class="CAS_page">

    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>

    <div class="row max-h">
        <div class="col-12 position-relative">
            <div class="container position-relative position-diploma-cas">
                <div class="row justify-content-end pt-4">
                    <div class="col-12 col-md-3 col-lg-2 me-0 me-lg-5">
                        {{-- <img src="assets/images/IBDP.png" alt="" class="img-fluid rounded-3"> --}}
                    </div>
                </div>
            </div>
            <div class="">
                <div class="px-3 py-4 light_gray_bg rounded-3 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 text-center text-md-start text-lg-start">
                                <h2 class="text-capitalize pb-3">{!! $cas->sec1_head !!}</h2>
                                <p class="ps-2 w-content-50 Open_Sans_font fw-semibold text-center text-md-start text-lg-start">
                                    {!! $cas->sec1_p !!}
                                </p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <img src="{{asset($cas->sec1_img)}}" alt="" style="max-height: 360px;
                            text-align: right;
                            float: right;" class="img-fluid rounded-3 mt-4">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container position-img">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5 mt-md-5 mt-lg-0 mt-xl-0 mt-xxl-0">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">

            <div class="col-12">
                <h2 class="pb-3 m-0">{!! $cas->sec2_head !!}</h2>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $cas->sec2_p !!}
                </p>
            </div>
        </div>
    </div>
<div class="w-100 ">
        <img class="w-100" src="assets/images/assets9.png" alt="">
    </div>
    <div class="w-100 mt-5">
        <img class="w-100" src="assets/images/Assets8.png" alt="">
    </div>
    

    <div class="second_color_bg margin-negative py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-column">
                            <div id="carouselExample22" class="carousel slide">
                            <div class="carousel-inner">
                                @foreach ( json_decode( $cas->sec3_img ) as $img )
                                <div class="carousel-item active">
                                    <img src="{{asset($img)}}" alt="" class="h-100 rounded-3">
                                </div>
                                @endforeach
                                {{----amgad comment----}}

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

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">

                    <h1 class="pb-1 fw-semibold">{!! $cas->sec3_head !!}</h1>
                    <h6 class="pb-3 Open_Sans_font">Creativity, Activity, Service </h6>

                  <!--  <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!! $cas->sec3_p !!}
                    </p>-->
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">

        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <div class="row flex-column-reverse flex-md-row-reverse flex-lg-row flex-xl-row flex-xxl-row h-100">
                    <div class="col-12 col-md-12 col-lg-12 mt-3 mt-md-0 mt-lg-0">
                        <img src="{{asset($cas->sec4_img)}}" alt="" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h2 class="pb-3 m-0 Open_Sans_font">{!! $cas->sec4_head !!}</h2>

               <!-- <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $cas->sec4_p !!}
                </p>-->
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">

          <!--  <div class="col-12 mt-4">
              <h1 class="pb-4 m-0"> {!! $cas->sec5_head !!}</h1>

                <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $cas->sec5_p !!}
                </p>h

                <div class="col-12 mt-4">
                <div id="carouselExample23" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset($cas->sec5_img)}}" alt="" class="h-100 rounded-3">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset($cas->sec5_img)}}" alt="" class="h-100 rounded-3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample23" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample23" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                     </button>
                </div>

                </div>
            </div> -->
        </div>
    </div>

    <div class="w-100">
        <img class="w-100" src="assets/images/Assets4.png" alt="">
    </div>

    <div class="second_color_bg pb-3">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">

                <div class="col-12 mt-4">
                    <h1 class="pb-4 m-0"> {!! $cas->sec6_head !!}</h1>
<!--
                    <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                        CAS students are expected to:
                    </p>-->
                    <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!! $cas->sec6_p !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 pb-2">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
           
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                <img src="{{asset($cas->sec7_img)}}" alt="" class="h-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                <img src="{{asset($cas->sec8_img)}}" alt="" class="h-100 rounded-3">
            </div>
          <!--  <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h1 class="pb-3 m-0"> {!! $cas->sec7_head !!}</h1>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    The five CAS stages are as follows.
                </p>
                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $cas->sec7_p !!}
                </p>
            </div>
        </div>
    </div>
-->
    <div class="container mb-5 pb-3">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
            
            
          
          <!--  <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h1 class="pb-3 m-0"> {!! $cas->sec8_head !!}</h1>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    The five CAS stages are as follows.
                </p>
                <p class="pb-2 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $cas->sec8_p !!}
                </p>
            </div>-->
            <div class="d-flex justify-content-end me-5 mt-5" style="    display: block!important;
            text-align: right;
            margin-top: 20px!important;">
                <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders " href="http://camb.test/apply-now">APPLY NOW</a>
            </div>
        </div>
    </div>
</div>
@endsection
