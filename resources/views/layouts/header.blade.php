<nav class="navbar position-relative py-3 px-1 px-md-4 px-lg-4 px-xl-4 shadow z-3 white_bg <?php if(request()->route()->getName() == 'index') echo 'myynavv'; ?> ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">
            <img class="img-fluid" width="170" src="{{asset('assets/images/Logo-Rad.png')}}" alt="">
        </a>
        <ul
            class="d-none d-lg-flex d-xl-flex d-xxl-flex w-fit me-3 position-relative align-items-center justify-content-end text-uppercase Open_Sans_font fw-semibold">
            <li class="fs-7 mega  position-relative d-flex flex-column">
                <a class="fs-7 py-2 px-3 rounded-2 btn_anim">about us</a>
                <div
                    class="mega-about white_bg top-100 start-50 translate-middle-x position-absolute rounded-3 align-items-center px-1 py-1 _borders">
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('welcome')}}">Welcome</a>
                    <span class=" fs-5 fw-bold first_color">|</span>
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('reachus')}}">reach us</a>
                </div>
            </li>
            <li class="fs-5 ">|</li>
            <li class="fs-7 mega  position-relative d-flex flex-column">
                <a class="fs-7 py-2 px-3 rounded-2 btn_anim">admission</a>
                <div
                    class="mega-about white_bg top-100 start-50 translate-middle-x position-absolute rounded-3 align-items-center px-1 py-1 _borders">
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('schoolPolice')}}" style="min-width: 13rem!important">school agreements</a>
                    <span class=" fs-5 fw-bold first_color">|</span>
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('tuitionFees')}}">Annual fees</a>
                 </div>
            </li>
            <li class="fs-5 ">|</li>
            <li class="fs-7 mega  position-relative d-flex flex-column">
                <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="#">programmes</a>
                <div
                    class="mega-about white_bg top-100 start-50 translate-middle-x position-absolute rounded-3 align-items-center px-1 py-1 _borders">
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('KG')}}">kindergarten</a>
                    <span class=" fs-5 fw-bold first_color">|</span>
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('primary')}}">primary</a>
                    <span class=" fs-5 fw-bold first_color">|</span>
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('MYP')}}">myp</a>
                    <span class=" fs-5 fw-bold first_color">|</span>
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('IBDP')}}">ibdp</a>
                    <span class=" fs-5 fw-bold first_color">|</span>
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('CAS')}}">cas</a>
                </div>
            </li>
            <li class="fs-5 ">|</li>
            <li class="fs-7"><a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="calender">calendar</a></li>
            <li class="fs-5 ">|</li>
            <li class="fs-7 mega  position-relative d-flex flex-column">
                <a class="fs-7 py-2 px-3 rounded-2 btn_anim">chs life</a>
                <div
                    class="mega-about white_bg top-100 start-0 translate-middle-x position-absolute rounded-3 align-items-center px-1 py-1 _borders">
                    <a class="fs-7 py-2 px-3 rounded-2 btn_anim" href="{{route('gallery')}}">gallery</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler d-block d-sm-block d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header px-4 py-3 shadow">
                <img class="img-fluid offcanvas-title" width="170" id="offcanvasNavbarLabel" src="assets/images/Logo-Rad.png" alt="">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body py-4 px-3">
                <ul class="navbar-nav text-center justify-content-start flex-grow-1 pe-3 text-uppercase fw-bold">
                    <li class="mega_res mb-3 d-flex flex-column">
                        <a class="fs-7 px-2 py-1 mb-2 w-fit rounded-2 btn_anim_res _borders">about us</a>
                        <div
                            class="d-flex flex-column gap-1 w_mega white_bg rounded-3 align-items-start px-1 py-1 ms-3 _borders">
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('welcome')}}">Welcome</a>
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('reachus')}}">reach us</a>
                        </div>
                    </li>
                    <li class="mega_res mb-3 d-flex flex-column">
                        <a class="fs-7 px-2 py-1 mb-2 w-fit rounded-2 btn_anim_res _borders">admission</a>
                        <div
                            class="d-flex flex-column gap-1 w_mega white_bg rounded-3 align-items-start px-1 py-1 ms-3 _borders">
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('schoolPolice')}}">school agreement</a>
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('tuitionFees')}}">tuition fees</a>
                        </div>
                    </li>
                    <li class="mega_res mb-3 d-flex flex-column">
                        <a class="fs-7 px-2 py-1 mb-2 w-fit rounded-2 btn_anim_res _borders" href="programmes.html">programmes</a>
                        <div
                            class="d-flex flex-column gap-1 w_mega white_bg rounded-3 align-items-start px-1 py-1 ms-3 _borders">
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('KG')}}">kindergarten</a>
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('primary')}}">primary</a>
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('MYP')}}">myp</a>
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('IBDP')}}">ibdp</a>
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('CAS')}}">cas</a>
                        </div>
                    </li>
                    <li class="mega_res mb-3 d-flex flex-column">
                        <a class="fs-7 px-2 py-1 mb-2 w-fit rounded-2 btn_anim_res _borders" href="{{route('calender')}}">calendar</a>
                    </li>
                    <li class="mega_res mb-3 d-flex flex-column">
                        <a class="fs-7 px-2 py-1 mb-2 w-fit rounded-2 btn_anim_res _borders">chs life</a>
                        <div
                            class="d-flex flex-column gap-1 w_mega white_bg rounded-3 align-items-start px-1 py-1 ms-3 _borders">
                            <a class="fs-7 py-1 px-2 w-100 rounded-2 hover_btn _borders " href="{{route('gallery')}}">gallery</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
