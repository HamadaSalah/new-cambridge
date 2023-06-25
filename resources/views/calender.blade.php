@extends('layouts.app')
@section('content')
{{-- <div class="calendar min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 
                                     
                <div class="vanilla-calendar">
                    <div id='calendar' class="mt-5"></div>
                    <img src="{{asset('assets/images/cal_tt.png')}}" class="img-response" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      themeSystem: 'bootstrap',
      events:  <?php echo $school_calender?>


     });
    calendar.render();
  });

</script>

@endsection --}}
 
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
