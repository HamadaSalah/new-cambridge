@extends('layouts.app')
@section('content')
<div class="gallery_page">

    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>

    <div class="">
        <div class="px-5 py-4 w-fit light_gray_bg rounded-3 mt-5">
            <div class="text-container text-center text-md-start text-lg-start">
                <h1 class="text-capitalize">gallery</h1>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="rotate-dev">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                        <a href="{{route('facilities')}}">
                        <div class="gallery z-n1">
                            <div class="gallery_border">
                                <div class="link-address text-center Open_Sans_font">
                                        <h5 class="text-white m-0">Facilities</h5>
                                </div>
                            </div>
                            <div class="gallery_child">
                                <img class="img-fluid" src="assets/images/Website pix/5Q7C2430.jpg"
                                    alt="">
                            </div>
                        </div>
                    </a>
                    </div>
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 2)}}">
                        <div class="gallery z-n1">
                            <div class="gallery_border">
                                <div class="link-address text-center Open_Sans_font">
                                        <h5 class="text-white m-0">Graduations</h5>
                                </div>
                            </div>
                            <div class="gallery_child">
                                <img class="img-fluid" src="assets/images/Website pix/Home,About us/467.jpg"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 3)}}">
                        <div class="gallery z-n1">
                            <div class="gallery_border">
                                <div class="link-address text-center Open_Sans_font">
                                        <h5 class="text-white m-0">Sports</h5>
                                </div>
                            </div>
                            <div class="gallery_child">
                                <img class="img-fluid" src="assets/images/Website pix/Home,About us/5Q7C9857.jpg"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 4)}}">
                    <div class="gallery z-n1">
                        <div class="gallery_border">
                            <div class="link-address text-center Open_Sans_font">
                                    <h5 class="text-white m-0">IBDP-CAS</h5>
                            </div>
                        </div>
                        <div class="gallery_child">
                            <img class="img-fluid" src="assets/images/Website pix/311780751_602081308374762_2136747823361552484_n.jpg"
                                 alt="">
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 5)}}">
                    <div class="gallery z-n1">
                        <div class="gallery_border">
                            <div class="link-address text-center Open_Sans_font">
                                    <h5 class="text-white m-0">Performances</h5>
                            </div>
                        </div>
                        <div class="gallery_child">
                            <img class="img-fluid" src="assets/images/Website pix/5Q7C3337.JPG"
                                 alt="">
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 6)}}">
                    <div class="gallery z-n1">
                        <div class="gallery_border">
                            <div class="link-address text-center Open_Sans_font">
                                    <h5 class="text-white m-0">KG Activities</h5>
                            </div>
                        </div>
                        <div class="gallery_child">
                            <img class="img-fluid" src="assets/images/Website pix/5Q7C3951.jpg"
                                 alt="">
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center align-items-center justify-content-md-center align-items-md-center justify-content-lg-start align-items-lg-start">
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 7)}}">
                    <div class="gallery z-n1">
                        <div class="gallery_border">
                            <div class="link-address text-center Open_Sans_font">
                                    <h5 class="text-white m-0">Orientations&
                                        Presentations</h5>
                            </div>
                        </div>
                        <div class="gallery_child">
                            <img class="img-fluid" src="assets/images/Website pix/5Q7C7288.JPG"
                                 alt="">
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 p-0 w-auto">
                    <a href="{{route('getGallery', 8)}}">
                    <div class="gallery z-n1">
                        <div class="gallery_border">
                            <div class="link-address text-center Open_Sans_font">
                                    <h5 class="text-white m-0">Celebrations</h5>
                            </div>
                        </div>
                        <div class="gallery_child">
                            <img class="img-fluid" src="assets/images/Website pix/5Q7C9948.JPG"
                                 alt="">
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 mt-5">
        <img class="w-100" src="assets/imagesassets8.png" alt="">
    </div>

    <div class="second_color_bg">
        <div class="pt-5">
            <div class="px-5 py-4 w-fit light_gray_bg rounded-3">
                <div class="text-container text-center text-md-start text-lg-start">
                    <h1 class="text-capitalize m-0">video</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="second_color_bg py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-11 col-md-10 col-lg-8">
                    <div class="slider-for">
                        @foreach ($videos as $vid)
                            <div class="">
                                
                                <video width="100%" height="100%" controls>
                                    <source src="{{asset($vid->video)}}" type="video/mp4">
                                    Brower Not Support
                                </video>
                                <p class="text-center text-capitalize fs-4 mt-2">{{$vid->name}}</p>
                            </div>                            
                        @endforeach

                    </div>
                    <div class="slider-nav">
                        @foreach ($videos as $vid)
                        <div class="">
                                
                            <video width="100%" height="100%" controls>
                                <source src="{{asset($vid->video)}}" type="video/mp4">
                                Brower Not Support
                            </video>
                            <p class="text-center text-capitalize fs-4 mt-2">{{$vid->name}}</p>
                        </div>                            
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection