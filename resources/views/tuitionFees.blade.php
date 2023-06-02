@extends('layouts.app')
@section('content')
<div class="aply_now_page">

    <div class="w-100 z-n1">
        <img src="assets/images/Asset.png" alt="" >
    </div>

   <!-- <div class="container">
        <div class="row">
            <div class="col-12 mt-4 REP">
                <h1 class="pb-4 text-uppercase">
                
                
                
                .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
                
                    TUITION FEES
                </h1>
                <h3 class="pb-1 lh-lg m-0 text-uppercase">
                    Enroll Now
                </h3>
                <form class="Open_Sans_font mytutform">
                    <div class="mb-2 mx-0 mx-md-2 mx-lg-2 mx-xl-2 mx-xxl-2">
                        <label for="Grade" class="form-label ms-2 Open_Sans_font fs-7 m-0">Grade</label>
                        <select class="form-select selectTut" aria-label="Default select example">
                            <option selected class="">Select Grade</option>
                            <option value="KG">KG</option>
                            <option value="First Grade">First Grade</option>
                            <option value="Second Grade">Second Grade</option>
                            <option value="Third Grade">Third Grade</option>
                            <option value="Fourth Grade">Fourth Grade</option>
                            <option value="Fifth Grade">Fifth Grade</option>
                            <option value="Sixth Grade">Sixth Grade</option>
                            <option value="Seventh Grade">Seventh Grade</option>
                            <option value="Eighth Grade">Eighth Grade</option>
                            <option value="Nineteenth Grade">Nineteenth Grade</option>
                            <option value="Tenth Grade">Tenth Grade</option>
                            <option value="eleventh Grade">eleventh Grade</option>
                          </select>
                    </div>
                    <div class="d-flex w-100 flex-column flex-md-row flex-lg-row align-items-center TOtal">
                        <div class="mb-2 w-100 mx-2">
                            <label for="Total" class="form-label ms-2 Open_Sans_font fs-7 m-0">Total</label>
                            <input type="text" class="form-control rounded-3 shadow fs-7 py-2" id="Total"
                                   placeholder="Total" value="5">
                            <p class="mt-2 ms-2 mb-0">
                                2023-2024
                            </p>
                        </div>
                        <div class="mb-2 w-100 mx-2">
                            <label for="1st Paymt" class="form-label ms-2 Open_Sans_font fs-7 m-0">1st Paymt</label>
                            <input type="text" class="form-control rounded-3 shadow fs-7 py-2" id="1stPaymt"
                                   placeholder="1st Paymt">
                            <p class="mt-2 ms-2 mb-0">
                                1/4/2023
                            </p>
                        </div>
                        <div class="mb-2 w-100 mx-2">
                            <label for="2st Paymt" class="form-label ms-2 Open_Sans_font fs-7 m-0">2st Paymt</label>
                            <input type="text" class="form-control rounded-3 shadow fs-7 py-2" id="2stPaymt"
                                   placeholder="2st Paymt">
                            <p class="mt-2 ms-2 mb-0">
                                1/6/2023
                            </p>
                        </div>
                        <div class="mb-2 w-100 mx-2">
                            <label for="3st Paymt" class="form-label ms-2 Open_Sans_font fs-7 m-0">3st Paymt</label>
                            <input type="text" class="form-control rounded-3 shadow fs-7 py-2" id="3stPaymt"
                                   placeholder="3st Paymt">
                            <p class="mt-2 ms-2 mb-0">
                                1/8/2023
                            </p>
                        </div>
                        <div class="mb-2 w-100 mx-2">
                            <label for="4st Paymt" class="form-label ms-2 Open_Sans_font fs-7 m-0">4st Paymt</label>
                            <input type="text" class="form-control rounded-3 shadow fs-7 py-2" id="4stPaymt"
                                   placeholder="4st Paymt">
                            <p class="mt-2 ms-2 mb-0">
                                1/12/2023
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-1">
                        <button type="button" class="rounded-3 first_color hover_btn _borders my-4 ms-2 px-3 py-1" id="AddSTD"><span
                                class="me-1"><i class="fa fa-plus"></i></span> ADD STUDENT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
     
     
     
     <img class="img-fluid" width="500" height="600" src="{{asset('assets/images/fees.jpg')}}" style=" display: block;margin-left: auto;   margin-right: auto;
  width: 50%;" alt="">
     

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