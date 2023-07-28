@extends('layouts.app')

@section('content')

<div class="FirstCarou">
    
    <div id="carouselExample" class="carousel slide">
       
        <div class="carousel-inner">
            @foreach ($sliders as $key =>  $slider )
                <div class="carousel-item <?php if($key==0) echo 'active'; ?> ">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="  Open_Sans_font second_color  pb-3 m-0 f_slider">
                                    <h5>{!! $slider->top_head!!}</h5>
                                    <br>
                                        <div>
                                            <p class="pe-5 second_color " style="font-size: 21px;font-family: 'Open Sans', sans-serif;">
                                                {!!$slider->head!!}
                                            </p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 ">
                           <!--     <img class="w-100 f_slider_img" src="{{asset($slider->img)}}" alt=""> -->
                            </div>
                        </div>
        
                    </div>
                </div>
            @endforeach
        </div>
        <button class="adw" style="position: absolute;left: 30px;bottom: 10%" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>

          </button>
          <button class="dwa" style="position: absolute;right: 30px;bottom: 10%"  type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>

          </button>
  

      </div>
</div>


{{-- <div class="w-100 stylerbottom" style="margin-top: -11rem!important;position: relative">
    <img class="w-100" src="assets/images/assets8-removebg-preview.png" alt="">
</div> --}}


<div class="events second_color_bg margin-negative py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h1 class="text-uppercase text-capitalize fw-bold first_color pb-4 m-0">
                        Upcoming Events
                    </h1>
                    <div class="ps-2 pb-4">
                        <h2 class="text-uppercase text-capitalize fw-bold first_color pb-2 m-0">
                            {{Carbon\Carbon::parse(now())->format('F Y')
                          }}
                        </h2>
                        <span class="fw-semibold">
                            Everything you need to know each month.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="row myCards" style="height:500px;overflow:scroll;;overflow-y: auto;overflow-x: auto;">
                    @foreach ($cards as $card)
                        <div class="col-6 col-md-4 col-lg-4 mb-4">
                            <a class="card rounded-2 main_color_bg px-3" style="height: 14rem;" href="#">
                                <div class="white_bg rounded-1 p-2 mt-3 text-center">
                                    <h6 class="text-capitalize">
                                        {{$card->date}}
                                    </h6>
                                </div>
                                <div class="card-body px-0 py-3 text-white">
                                    <p class="card-title"> {{$card->title}}</p>
                                    <span class="card-text fs-7"> {{$card->example}}</span>
                                </div>
                            </a>
                        </div>                        
                    @endforeach

                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="your-class Open_Sans_font second_color pb-3 m-0">
                    @foreach ($eventgall as $item)
                    <img class="rounded-2 h-100" style="height: 470px!important" src="{{asset($item->img)}}"
                    alt="Event Photo">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
 
 <div class="calendar min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 
                                     
                <div class="vanilla-calendar" style="padding: 40px">
                    <div id='calendar' class="mt-5"></div>
                    <div class="stepsss"  style="padding: 50px">
                      <button class=" clickerbtn btn my-Assessment"  type="button" class="btn btn-primary" data-type="Assessment" data-bs-toggle="modal" data-bs-target="#exampleModal">Assessment</button>
                      <button class=" clickerbtn btn my-Holiday"  type="button" class="btn btn-primary" data-type="Holiday" data-bs-toggle="modal" data-bs-target="#exampleModal">Holiday</button>
                      <button class=" clickerbtn btn my-Event"  type="button" class="btn btn-primary" data-type="Event" data-bs-toggle="modal" data-bs-target="#exampleModal">Events</button>
                      <button class=" clickerbtn btn my-Metting"  type="button" class="btn btn-primary" data-type="Metting" data-bs-toggle="modal" data-bs-target="#exampleModal">Meeting</button>
                      <button class=" clickerbtn btn my-Trips"  type="button" class="btn btn-primary" data-type="Trips" data-bs-toggle="modal" data-bs-target="#exampleModal">Trips</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 90%">
  <div class="modal-dialog mw-100 w-75">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">All</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>User Details</h2>
        <table class="table table-striped table-dark" style="font-family: verdana">
            <thead>
                <tr>
                  <th>start</th>
                  <th>end</th>
                  <th>Desciption</th>
                </tr>
            </thead>
            <tbody id="data-table">
            </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

@push('custom-css')
<script src='https://unpkg.com/popper.js/dist/umd/popper.min.js'></script>
<script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>


<style>

    .my-Assessment, .my-Holiday, .my-Event,.my-Metting, .my-Trips {
      font-size: 20px;
      font-weight: 500;
      font-family:  'Cairo', sans-serif
    }
    .my-Assessment {
      color: rgb(78 77 77)
    }
    .my-Holiday {
      color:  rgb(228, 54, 61)
    } 
    .my-Event {
      color: rgb(222 213 86)
    }
    .my-Metting {
      color: #000076
    }
    .my-Trips {
      color: rgb(128, 204, 128)
    }
    .popper,
    .tooltip {
      position: absolute!important;
      z-index: 9999!important;
      background: #b11e24!important;
      color: black!important;
      width: 200px!important;
      border-radius: 3px!important;
      box-shadow: 0 0 2px rgba(0,0,0,0.5)!important;
      padding: 10px!important;
      text-align: center!important;
    }
    .style5 .tooltip {
      background: #1E252B!important;
      color: #FFFFFF!important;
      max-width: 200px!important;
      width: auto!important;
      font-size: .8rem!important;
      padding: .5em 1em!important;
    }
    .popper .popper__arrow,
    .tooltip .tooltip-arrow {
      width: 0!important;
      height: 0!important;
      border-style: solid!important;
      position: absolute!important;
      margin: 5px!important;
    }
  
    .tooltip .tooltip-arrow,
    .popper .popper__arrow {
      border-color: #b11e24!important;
    }
    .style5 .tooltip .tooltip-arrow {
      border-color: #fff!important;
    }
    .popper[x-placement^="top"],
    .tooltip[x-placement^="top"] {
      margin-bottom: 5px!important;
    }
    .popper[x-placement^="top"] .popper__arrow,
    .tooltip[x-placement^="top"] .tooltip-arrow {
      border-width: 5px 5px 0 5px!important;
      border-left-color: transparent!important;
      border-right-color: transparent!important;
      border-bottom-color: transparent!important;
      bottom: -5px!important;
      left: calc(50% - 5px)!important;
      margin-top: 0!important;
      margin-bottom: 0!important;
    }
    .popper[x-placement^="bottom"],
    .tooltip[x-placement^="bottom"] {
      margin-top: 5px!important;
    }
    .tooltip[x-placement^="bottom"] .tooltip-arrow,
    .popper[x-placement^="bottom"] .popper__arrow {
      border-width: 0 5px 5px 5px!important;
      border-left-color: transparent!important;
      border-right-color: transparent!important;
      border-top-color: transparent!important;
      top: -5px!important;
      left: calc(50% - 5px)!important;
      margin-top: 0!important;
      margin-bottom: 0!important;
    }
    .tooltip[x-placement^="right"],
    .popper[x-placement^="right"] {
      margin-left: 5px!important;
    }
    .popper[x-placement^="right"] .popper__arrow,
    .tooltip[x-placement^="right"] .tooltip-arrow {
      border-width: 5px 5px 5px 0!important;
      border-left-color: transparent!important;
      border-top-color: transparent!important;
      border-bottom-color: transparent!important;
      left: -5px!important;
      top: calc(50% - 5px)!important;
      margin-left: 0!important;
      margin-right: 0!important;
    }
    .popper[x-placement^="left"],
    .tooltip[x-placement^="left"] {
      margin-right: 5px!important;
    }
    .popper[x-placement^="left"] .popper__arrow,
    .tooltip[x-placement^="left"] .tooltip-arrow {
      border-width: 5px 0 5px 5px!important;
      border-top-color: transparent!important;
      border-right-color: transparent!important;
      border-bottom-color: transparent!important;
      right: -5px!important;
      top: calc(50% - 5px)!important;
      margin-left: 0!important;
      margin-right: 0!important;
    }
  .tooltip-inner {
    color: #FFF;
    font-family: Verdana, Geneva, Tahoma, sans-serif
  }
  </style>
  
  
@endpush

{{-- @dd($school_calender) --}}
<script src='https://unpkg.com/popper.js/dist/umd/popper.min.js'></script>
<script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      themeSystem: 'bootstrap',
      eventDidMount: function(info) {
        var tooltip = new Tooltip(info.el, {
          title: info.event.extendedProps.description,
          placement: 'top',
          trigger: 'hover',
          container: 'body'
        });
      },

      events: <?php echo $school_calender?>

     });
    calendar.render();
  });

</script>
@push('custom-sc')
<script>
  $(document).ready(function() {
    $('.clickerbtn').click(function() {
        var type = $(this).data('type');  
        $.ajax({
            url: '/api/getcalenders',
            type: 'POST',
            data: { type: type },  
            success: function(response) {
                var tableBody = $('#data-table');
                tableBody.empty(); // Clear any existing table data
                $.each(response, function(index, item) {
                    var row = $('<tr>');
                      row.append($('<td>').text(item.start));
                      row.append($('<td>').text(item.end));
                      row.append($('<td>').text(item.desc));
                        console.log(row);
                    tableBody.append(row);
                });
            },
            error: function(xhr) {
                 
            }
        });
    });
});

 
</script>

  
@endpush

 @endsection
