<footer>
    <div class="container-fluid">
        <div class="row footer main_color_bg">
            <ul class="up_footer text-uppercase d-flex align-items-center justify-content-between text-white py-2">
                <li class="mx-auto">
                    <a href="https://www.google.com/maps/place/Cambridge+High+School/@31.9848064,35.8777881,16z/data=!4m6!3m5!1s0x151ca03651c4092b:0xa8e799573793cab7!8m2!3d31.9814546!4d35.8791385!16s%2Fm%2F07s419z">
                        <i class="fa fa-street-view"></i>
                    </a>
                </li>
                <span>|</span>
                <li class="mx-auto">
                    <a href="https://www.instagram.com/cambridgehighschool/">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <span>|</span>
                <li class="mx-auto">
                    <a href="https://www.youtube.com/@CambridgeHighSchool">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
                <span>|</span>
                <li class="mx-auto">
                    <a href="https://web.facebook.com/Cambridge.Jordan/">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
            </ul>
            <div
                class="down_footer py-4 px-1 text-center text-white d-flex flex-column flex-xl-row flex-lg-row align-items-center justify-content-between border-top border-white">
                <div class="d-flex flex-column flex-xl-row flex-lg-row align-items-center">
                    <ul class="left-side d-flex align-items-center Open_Sans_font text-uppercase py-2">
                        <li class="px-3"><a class="text-white" href="{{route('welcome')}}">home</a></li>
                        <span>|</span>
                        <li class="px-3"><a class="text-white" href="{{route('reachus')}}">about us</a></li>
                    </ul>
                    <ul class="left-side d-flex align-items-center Open_Sans_font text-uppercase py-2">
                        <span class="d-none d-lg-block d-xl-block d-xxl-block">|</span>
                        <li class="px-3"><a class="text-white" href="{{route('schoolPolice')}}">admission</a></li>
                        <span>|</span>
                        <li class="px-3"><a class="text-white" href="{{route('facilities')}}">chs life</a></li>
                    </ul>
                    <ul class="left-side d-flex align-items-center Open_Sans_font text-uppercase py-2">
                        <span class="d-none d-lg-block d-xl-block d-xxl-block">|</span>
                        <li class="px-3"><a class="text-white" href="{{route('calender')}}">calender</a></li>
                        <span>|</span>
                        <li class="px-3"><a class="text-white" href="{{route('media')}}">media</a></li>
                    </ul>
                    <ul class="left-side d-flex align-items-center Open_Sans_font text-uppercase py-2">
                        <span class="d-none d-lg-block d-xl-block d-xxl-block">|</span>
                        <li class="px-3"><a class="text-white" href="https://chs.follettdestiny.com/consortium/servlet/presentconsortiumloginform.do">library</a></li>
                        <span>|</span>
                        <li class="px-3"><a class="text-white" href="{{route('polices')}}">CHS Policies</a></li>
                        <span>|</span>
                        <li class="px-3"><a class="text-white" href="{{route('unver_cons')}}"> UNi-Counseling
 </a></li>
                    </ul>
                </div>
                <div class="right-side px-3 pt-3 pt-lg-0 pt-xl-0 text-uppercase Open_Sans_font">
                    CAMBRIDGE HIGH SCHOOL (CHS) Copyright © 2023
                    <br>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}" ></script>

<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

@stack('custom-sc')
    </body>

</html>
