@extends('layouts.app')
@section('content')
<div class="facilities_page h-100">
    <div class="px-3 py-5 rounded-3">
        <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 pt-5 text-center text-md-start text-lg-start">
            <h2 class="text-capitalize fw-bold text-uppercase pb-4">FACILITIES</h2>
        </div>
        <div class="main_color_bg d-none d-sm-none d-md-block w-50 shape-line">
        </div>
        <div class="ms-5 d-none d-sm-none d-md-block mt-3">
            <div class="main_color_bg w-50 shape-line">
            </div>
        </div>
        <p class="pt-4 ps-2 ps-md-5 ps-lg-5 pe-2 pe-md-5 pe-lg-5 Open_Sans_font text-center text-md-start text-lg-start fw-semibold">
            Our school structure contains four floors of classrooms which comfortably house 1,500 students.
        </p>
    </div>
    
    <div class="container my-5 pb-5">
        <div class="center">
            @foreach ($cats as $cat)
            <div class="position-relative _overlay rounded-3 overflow-hidden">
                <div class="_link-border rounded-3 py-2">
                    <div class="text-start text-white h-100 d-flex flex-column justify-content-center mx-3">
                        <a class="mb-1" href="{{route('getFacilities', $cat->id)}}">
                            <h2 class="text-white fw-bold">{{$cat->name}}</h2>
                        </a>
                        <p class="m-0 d-none Open_Sans_font fs-7 lh-lg">
                            {{$cat->head}}
                        </p>
                    </div>
                </div>
                <div class="">
                    <img class="img-fluid" src="{{$cat->img}}" alt="Photo">
                </div>
            </div>
            @endforeach
         </div>
    </div>



</div>
@endsection