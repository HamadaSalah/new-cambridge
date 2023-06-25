


@extends('layouts.app')
@section('content')
<div class="IBDP_page">

    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>

    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Assets.png" alt="">
    </div>

    <div class="container">
        <div class="row justify-content-end">

            <div class="col-12 col-md-6 col-lg-3">
                <img src="assets/images/IBDP.png" alt="" class="img-fluid rounded-3">
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
            <div class="col-12 col-md-12 col-lg-6 misimg">
                <img src="{{asset($i->sec1_img)}}" alt="" class="h-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">

                <h2 class="pb-3 m-0 Open_Sans_font">{!! $i->sec1_head !!}</h2>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $i->sec1_p !!}
                </p>

            </div>
        </div>
    </div>
<div class="w-100 ">
        <img class="w-100" src="assets/images/assets9.png" alt="">
    </div>
    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <img src="{{asset($i->sec2_img)}}" alt="" class="w-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-5 mt-4">
                <h2 class="pb-4 m-0 Open_Sans_font">{!! $i->sec2_head !!}</h3>

                    <p class="pb-3 lh-lg m-0 Open_Sans_font">
                        {!! $i->sec2_p !!}
                    </p>

                    <br><br>
                    <div class="d-flex justify-content-end me-5 mt-5">
                        <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders "
                           href="https://test.cambridge.edu.jo/unver-cons">UNIVERSITY COUNSELLING</a>
                    </div>
            </div>
        </div>
    </div>

    <div class="w-100 mt-5">
        <img class="w-100" src="assets/images/Assets8.png"  alt="">
    </div>

    <div class="second_color_bg margin-negative py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="d-flex flex-column">
                                <img src="" alt=""
                                     class="h-100 mb-4 rounded-3">


                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <img src="{{asset($i->sec3_img)}}" alt="" style="max-width:380%" class="h-100 rounded-3">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h2 class="pb-3 m-0 Open_Sans_font">{!! $i->sec3_head !!}</h2>

                    <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!! $i->sec3_p !!}
                    </p>

                </div>
            </div>
        </div>
    </div>
@php
  
@endphp
    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                <img src="{{asset($i->sec4_img)}}" alt="" class="h-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h2 class="pb-3 m-0 Open_Sans_font">{!! $i->sec4_head !!}</h2>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $i->sec4_p !!}
                </p>

            </div>
        </div>
    </div>

    <div class="second_color_bg py-5">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                    <img src="{{asset($i->sec5_img)}}" alt="" class="h-100 rounded-3">
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h2 class="pb-3 m-0 Open_Sans_font">{!! $i->sec5_head !!}</h2>

                    <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!! $i->sec5_p !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">

            <div class="col-12 mt-4">
                <h2 class="pb-3 m-0 Open_Sans_font">{!! $i->sec6_head !!}</h2>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $i->sec6_p !!}
                </p>
<br>
            <div class="col-12 col-md-12 col-lg-12 mt-4 misimg">
            <img src="assets/images/uas.jpg" style=" margin-left: auto;  margin-right: auto; display: block;" alt="" width="700" height="230"> </div> <br><br><br>

        
       
                <div class="d-flex justify-content-end me-5 mt-5">
                    <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders "
                       href="{{route('CAS')}}">CAS</a>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-end me-5 mt-5">
                <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders " href="https://test.cambridge.edu.jo/tuition-fees">APPLY NOW</a>
            </div>
        </div>
    </div>
</div>
@endsection
