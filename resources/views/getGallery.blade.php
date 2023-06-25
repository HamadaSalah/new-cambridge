@extends('layouts.app')
@section('content')
<div class="Facility_Library_page">
    @if($gals->count() > 0)
    <div class="px-3 py-5 rounded-3">
        <div
            class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 pt-5 text-center text-md-start text-lg-start">
            <h2 class="text-uppercase fw-bold text-uppercase pb-4">{{$name}} GALLERY

            </h2>
        </div>
        <div class="main_color_bg d-none d-sm-none d-md-block w-50 shape-line">
        </div>
        {{-- <div class="ms-5 d-none d-sm-none d-md-block mt-3">
            <div class="main_color_bg w-50 shape-line">
            </div>
        </div> --}}
        {{-- <p
            class="pt-4 ps-2 ps-md-5 ps-lg-5 pe-2 pe-md-5 pe-lg-5 Open_Sans_font text-center text-md-start text-lg-start fw-semibold" style="font-weight: bold">
            <strong><center>كانت لنا وداً على الاكباد &nbsp;&nbsp;&nbsp; &nbsp;لغة اذا وقعت على أسماعنا </center></strong>
            <strong><center>كانت لنا وداً على الاكباد &nbsp;&nbsp;&nbsp; &nbsp;لغة اذا وقعت على أسماعنا </center></strong>
            <strong><center>كانت لنا وداً على الاكباد &nbsp;&nbsp;&nbsp; &nbsp;لغة اذا وقعت على أسماعنا </center></strong>
         </p> --}}
    </div>
    @endif
    <div class="container">
        <div class="row">
            @if ($gals->count())
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($gals as $key => $mygal)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  <?php if($loop->index == 0) echo"active"; ?>" id="{{$key}}-tab" data-bs-toggle="tab" data-bs-target="#{{$key}}" type="button" role="tab" aria-controls="{{$key}}" aria-selected="true">{{$key}}</button>
                    </li>
                @endforeach
              </ul>
              <div class="tab-content" id="myTabContent">
                @foreach ($gals as $key => $mygal)
                    <div class="tab-pane fade show <?php if($loop->index == 0) echo"active"; ?>" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">
                        <div class="row">
                        @foreach ($mygal as $item)
                            <div class="col-12 col-md-4 col-lg-3 mb-4">
                                <a href="{{ asset($item->img) }}"  data-fancybox="gallery">
                                <img src="{{ asset($item->img) }}" style="width: 100%; height: 300px;padding: 20px"
                                    alt="photo" class="img-fluid rounded-3 overflow-hidden">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
              </div>      
                
            @endif
        </div>
    </div>
    {{-- <div class="library-gallery">
        <div class="container my-5 pb-5">
            <div class="row">
                @if($gals->count() > 0)
                    @foreach ($gals as $key => $myitem)
                    <div style="width: 100%;text-align: center;margin: auto">
                        <span style="font-size: 35px;font-weight: bold;margin-bottom: 50px;margin-top: 50px;display: inline-block; padding: 4px 17px; border-radius: 15px;text-align: center;border: 2px dashed#000;">{{$key}}</span>
                    </div>
                         @foreach ($myitem as $item)
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <a href="{{ asset($item->img) }}"  data-fancybox="gallery">
                            <img src="{{ asset($item->img) }}" style="width: 100%; height: 300px"
                                alt="photo" class="img-fluid rounded-3 overflow-hidden">
                            </a>
                        </div>
                        @endforeach
                    @endforeach
                @else
                <h1><center> No Image in this Gallery</center></h1>
                @endif
            </div>
        </div>
    </div> --}}
</div>
@push('custom-sc')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endpush
    @push('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    @endpush
@endsection
