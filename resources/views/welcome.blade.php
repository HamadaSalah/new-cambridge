@extends('layouts.app')

@section('content')

 
<div class="welcome_page">
    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>
    <div class="row pt-5 mt-5">
        <div class="col-12 position-relative">
            <div class="">
                <div class="px-3 py-4   light_gray_bg rounded-3 mt-5">
                    <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 text-center text-md-start text-lg-start">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-capitalize first_color">Cambridge High School</h2>
                                <h3 class="">{!!$welcome->open_in!!}</h3>
                                <p class="ps-2 w-content-50 Open_Sans_font fw-semibold text-center text-md-start text-lg-start">
                                    {!!$welcome->desc!!}
                                </p>
        
                            </div>
                            <div class="col-md-6">
                                    <img src="{!!asset($welcome->img)!!}" alt="" style="max-height: 1600px;
                                    text-align: center;
                                    float: right;"
                                         class="img-fluid rounded-3 mt-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container position-img misimg">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                    </div>
                   
                   <div class="col-12 col-md-12 col-lg-4">
                        <img src="{!!asset($welcome->img)!!}" alt=""
                             class="img-fluid rounded-3 mt-4"> 
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    
<div class="w-100 ">
        <img class="w-100" src="assets/images/assets9.png" alt="">
    </div>
    <div class="container mb-5">
        <div class="row align-items-center flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <img src="{!!asset($welcome->his_img)!!}" alt="" class="img-fluid rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4 historydiv">
                <h3 class="pb-3">CHS</h3>
                <h2 class="pb-2 first_color text-uppercase">
                    History
                </h2>
                <p class="pb-3 lh-lg m-0">
                    {!!$welcome->his_desc!!}
                </p>
                 
                <div class="d-flex justify-content-end me-5">
                    <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders "
                       href="{{Route('applyNow')}}">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="second_color_bg py-4">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <div class="row h-100 misimg">
                        <div class="col-12">
                            <img src="{!!asset($welcome->mis_img)!!}" alt=""
                                 class="h-100 rounded-3">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4 missiondiv">
                    <h3 class="pb-3">Our</h3>
                    <h2 class="pb-4 first_color text-uppercase">
                         Mission Statement 
                    </h2>
                    <p class="pb-3 lh-lg m-0">
                        {!!$welcome->mis_desc!!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <img src="{!!asset($welcome->vis_img)!!}" alt="" class="img-fluid rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4 visiondiv">
                <h3 class="pb-3">Our</h3>
                <h2 class="pb-4 first_color text-uppercase">
                  Vision Statement 
                </h2>
                <p class="pb-3 lh-lg m-0">
                    {!!$welcome->vis_desc!!}
                </p>
                <div class="d-flex justify-content-between align-items-center me-0 me-md-5 me-lg-5">
                   <!-- <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders "
                       href="{{Route('applyNow')}}">Apply Now</a> -->
                </div>
            </div>
        </div>
    </div>
</div>



 @endsection
