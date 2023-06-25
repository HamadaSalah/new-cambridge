@extends('layouts.app')
@section('content')
<div class="reach_us_page">
    
    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>
    <div class="second_color_bg">
        <div class="row">
            <div class="col-12 position-relative">
                <div>
                    <div class="px-3 py-5 rounded-3">
                        <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 py-5 text-center text-md-start text-lg-start rechp">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-capitalize fw-bold pb-4">reach us</h2>
                                    <p class="ps-2 pe-2 pe-md-5 pe-lg-5 Open_Sans_font text-center text-md-start text-lg-start">
                                        {!!$reachus->head!!}
                                    </p>
                                </div>
                                <div class="col-md-6" style="">
                                        <img src="{!!asset($reachus->f_img)!!}" style="max-height: 500px;
                                        text-align: right;
                                        float: right;" alt="" class="img-fluid rounded-3 mt-4">
                                </div>
                            </div>
                        </div>
                        <div class="main_color_bg w-25 shape-line">
                        </div>
                        <div class="ms-5  mt-3">
                            <div class="main_color_bg w-25 shape-line">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="container position-img-reach z-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                         </div>
                    </div>
                </div>
                <div class=" ">
                    <div class="px-3 py-4 w-content-75 white_bg rounded-3 mt-5 addresses">
                        <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 text-center text-md-start text-lg-start">
                            <h2 class="text-capitalize mb-3 "style="text-align:center;">REACH US</h2>
                           
                           
                           <!-- <a class="Open_Sans_font pb-1"  href="mailto:{!!$reachus->email!!}"><p
                                    class="ps-2 w-content-50 Open_Sans_font text-center text-md-start text-lg-start m-0">
                                {!!$reachus->email!!}</p></a>
                            <p class="ps-2 w-content-50 m-0 pb-1 Open_Sans_font text-center text-md-start text-lg-start">
                                Amman - Al Rabia- Abdalkareem Al Dabbas St.
                            </p>
                            <p class="ps-2 w-content-50 m-0 pb-1 Open_Sans_font text-center text-md-start text-lg-start">
                                {!!$reachus->phone1!!}
                            </p>
                            <p class="ps-2 w-content-50 m-0 pb-1 Open_Sans_font text-center text-md-start text-lg-start">
                                {!!$reachus->phone2!!}
                            </p>  -->
                         <div >
                <img src="assets/images/rechup.jpg" alt="" class="h-100 rounded-3" style =" display: block;
  margin-left: 20%;
  margin-right: auto;
  width: 60%;">
            </div>
                        </div>
                        
                   
                    </div>
                    
                </div>
                   <div class="w-100 ">
        <img class="w-100" src="assets/images/assets9.png" alt="">
    </div>
          </div>
        </div>
    </div>
    <div class="w-100">
        <img class="w-100" src="assets/images/Assets7.png" alt="">
    </div>
    <div class="white_bg py-4">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <div class="row h-100 misimg">
                        <div class="col-12">
                            <img src="{!!asset($reachus->l_img)!!}" alt="" style="height: 510px!important;
                            margin: auto;
                            text-align: center;
                            display: block;"
                                 class="h-100 rounded-3">
                        </div>
                        {{-- <div class="col-6">
                            <img src="assets/images/Website pix/Reach us/5Q7C4503.jpg" alt=""
                                 class="h-100 rounded-3">
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h2 class="pb-4 text-uppercase">
                        GET ANSWERS TO YOUR QUESTIONS.
                    </h2>
                    <p class="pb-3 lh-lg m-0 rehus">
                        It is the mission of the Admission Committee to
                        recruit, inform and admit new, qualified students.
                    </p>
                    <form class="Open_Sans_font" method="POST" action="{!!route('emailToUs')!!}">
                        @csrf
                        <div class="mb-2">
                            <label for="Name" class="form-label Open_Sans_font fs-7 m-0">Name</label>
                            <input type="name" class="form-control rounded-3 shadow fs-7 py-2" id="Name"
                                   placeholder="Name" name="name" required>
                        </div>
                        <div class="mb-2">
                            <label for="Email1" class="form-label Open_Sans_font fs-7 m-0">Email</label>
                            <input type="email" class="form-control rounded-3 shadow fs-7 py-2" id="Email1"
                                   placeholder="Email" name="email" required>
                        </div>
                        <div class="mb-2">
                            <label for="PhoneNumber" class="form-label Open_Sans_font fs-7 m-0">Phone Number</label>
                            <input type="phoneNumber" class="form-control rounded-3 shadow fs-7 py-2"
                                   id="PhoneNumber" placeholder="Phone Number" name="phone" required>
                        </div>
                        <div class="mb-4">
                            <label for="Message" class="form-label fs-7 Open_Sans_font m-0">Message</label>
                            <textarea class="form-control rounded-3 shadow fs-7" id="Message" rows="3"
                                      placeholder="Message" name="message" required></textarea>
                        </div>
                        <div class="d-flex justify-content-start justify-content-xxl-end justify-content-xl-end justify-content-lg-end pt-2">
                            <button type="submit" class="rounded-3 first_color hover_btn _borders px-5 py-1">Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mymap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.242000372957!2d35.879138499999996!3d31.9814546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca03651c4092b%3A0xa8e799573793cab7!2z2YXYr9ix2LPYqSDZg9in2YXYqNix2K_YrCDYp9mE2KvYp9mG2YjZitip!5e0!3m2!1sar!2sjo!4v1681909625777!5m2!1sar!2sjo" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection