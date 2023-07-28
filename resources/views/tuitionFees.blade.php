@extends('layouts.app')
@section('content')
<div class="aply_now_page">


    <div class="w-100 z-n1">
        <img src="assets/images/Asset.png" alt="" >
    </div>

  


{{-- 
     <img class="img-fluid" width="500" height="600" src="{{asset('assets/images/fees.jpg')}}" style=" display: block;margin-left: auto;   margin-right: auto;
  width: 50%;" alt=""> --}}

    <div class="container">
        <div class="row" style="position: relative;overflow: scroll">
            <table class="table">
                <thead class="table " style="background-color: #b11e24!important;">
                <tr>
                    <th scope="col" style="color: #FFF">Grade</th>
                    <th scope="col" style="color: #FFF">Registeration Fees</th>
                    <th scope="col" style="color: #FFF">Total Of Payment</th>
                    <th scope="col" style="color: #FFF">1ST Payment (1/5)</th>
                    <th scope="col" style="color: #FFF">2ND Payment (1/6)</th>
                    <th scope="col" style="color: #FFF">3RD Payment (1/8)</th>
                    <th scope="col" style="color: #FFF">4TH Payment (1/12d)</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tuts as $pay)
                    <tr>
                        <th scope="col">{{$pay->payment->tut->class ?? ''}}</th>
                        <th scope="col">
                            @if ($loop->index <=3)
                                {{200}}
                            @else
                                {{400}}
                            @endif    
                        </th>
                        <th scope="col">{{$pay->payment->total ?? '--'}}</th>
                        <th scope="col">{{$pay->payment->first ?? '--'}}</th>
                        <th scope="col">{{$pay->payment->second ?? '--'}}</th>
                        <th scope="col">{{$pay->payment->third ?? '--'}}</th>
                        <th scope="col">{{$pay->payment->fourth ?? '--'}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">

            <div class="red_line_section mx-auto my-3"></div>

            <div class="col-12">
                <p class="pb-2 lh-lg m-0">
                    > An additional CAS educational fee of JO 150 for Grades 11 + 12 due on 1/5/2023.
                </p>
                <p class="pb-2 lh-lg m-0">
                   > Grade 11 + 12 students taking visual arts are charged an additional JD 150 each year.
                </p>
                <p class="pb-2 lh-lg m-0">
                    > An additional Extended Essay for Diploma Students fee of JO 300 for Grade 11 due on 30/6/2023.
                </p>
                <p class="pb-2 lh-lg m-0">
                    > Graduation fee for Grade 12 is JO 300.
                </p>
                <p class="pb-2 lh-lg m-0">
                   > One time joining fee for new students is JD 400 for Grades 2 - 12IB and JD 200
   for K*, KGl, KG2 and Grade.
                </p>
                <p class="pb-2 lh-lg m-0">
                   The joining fees are non-refundable and are not part of the tuition.
                </p>
                <p class="pb-2 lh-lg m-0">
                    > Tuition fees do not include textbooks, copybooks, exams, graduation, uniform, transportation or field trips; but do include Ministry of Education textbooks and insurance for accidents taking place at school.
                </p>
                <p class="pb-3 lh-lg m-0">
                   > First sibling pays full tuition, but a discount of 10% applies for the second sibling, and the third or more siblings receive 15%.

                </p>
                <p class="pb-2 lh-lg m-0">
                   > A discount of 5% will be offered for tuition paid in full before 1/8/2023.
                </p>
                <p class="pb-2 lh-lg m-0">
                   > A yearly fee of JD 300 for additional one hour supervision of KG students before and after normal school hours is charged. However, students supervised during duty hours are not offered any bus services in the afternoon.
                </p>
                <p class="pb-2 lh-lg m-0">


                  > Seat reservation fee for existing students (the 1st installment fee) must be paid by 1/4/2023
for the coming academic year. Seats not reserved by the given date will be offered to students on
our waiting list.
                </p>
                <p class="pb-2 lh-lg m-0">
                    > Seats are reserved on a yearly basis, and therefore fees are paid for the full year even if the student transfers out during the year. Fees paid are non-refundable.

                </p>
                <p class="pb-2 lh-lg m-0">
                  > If a student transfers from school at any time, the account must be settled in full before documents are released.

                </p>
                <p class="pb-2 lh-lg m-0">
                   > If you wish to transfer your child from the school at the end of the academic year, the student's file must be removed before 30/6/2023.

                </p>
                 <p class="pb-2 lh-lg m-0">
                 > Transportation is offered to most areas of West Amman. Price is JD 750 for inside Amman, and JD 800 for Airport Road, round trip per year, payable 1/5/2023 . Each bus is accompanied by an assistant for child safety and security.


                </p>

                <div class="red_line_section mx-auto my-3"></div>

            </div>
        </div>
    </div>
</div>

@endsection
