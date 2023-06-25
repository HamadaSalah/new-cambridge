@extends('layouts.app')
@section('content')
<div class="Facility_Library_page">
    <div class="px-3 py-5 rounded-3">
        @if($facs->count() > 0)
        <div
            class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 pt-5 text-center text-md-start text-lg-start">
            <h2 class="text-uppercase fw-bold text-uppercase pb-4">{{$facs[0]->category->name}}
            </h2>
        </div>
        <div class="main_color_bg d-none d-sm-none d-md-block w-50 shape-line">
        </div>
        <div class="ms-5 d-none d-sm-none d-md-block mt-3">
            <div class="main_color_bg w-50 shape-line">
            </div>
        </div>
        @endif
     </div>

    <div class="library-gallery">
        <div class="container my-5 pb-5">
            <div class="row">
                @if($facs->count() > 0)
                @foreach ($facs as $fac)
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset($fac->img) }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                    
                @endforeach
                @else
                <center><h1>No Image</h1></center>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection