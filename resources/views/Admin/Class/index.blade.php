@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;margin-top: 0">All Classess</h2>
{{-- <a href="{{route('admin.classs.create')}}">
    <button class="btn btn-primary" style="float: right"><i class="fa fa-plus"> </i>  New Video</button>
</a> --}}
<div class="clearfix"></div>
<div class="clear"></div>
    @if ($classes->count() > 0)
    <div class="table-responsive">
        <table class="table user-table no-wrap" id="myDTable">
            <thead>
                <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">name</th>
                    <th class="border-top-0">Total</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                <tr>
                    <td>{{$class->id}}</td>
                    <td style="">
                        {{$class->class}}
                    </td>
                    <td style="">
                        {{$class->amount}} JOD
                    </td>
                    <td>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-pencil-square-o"></i> Edit
                        </button>

                     </td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    @else
        <div class="text-center">No Data Available</div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Grade Amout </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.class.update', 1)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Head</label>
                        <select class="custom-select custom-select-lg mb-3" name="tut_id" id="optionDropdown">
                            <option selected>select Grade</option>
                            @foreach ($classes as $grad)
                                <option value="{{$grad->id}}">{{$grad->class}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="first">First Pay</label>
                        <input type="number" class="form-control" id="first" name="first"  placeholder="Amount JOD" ></input>
                    </div>
                    <div class="form-group">
                        <label for="second">Second Pay</label>
                        <input type="number" class="form-control" id="second" name="second"  placeholder="Amount JOD" ></input>
                    </div>
                    <div class="form-group">
                        <label for="third">Third Pay</label>
                        <input type="number" class="form-control" id="third" name="third"  placeholder="Amount JOD" ></input>
                    </div>
                    <div class="form-group">
                        <label for="fourth">Fourth Pay</label>
                        <input type="number" class="form-control" id="fourth" name="fourth"  placeholder="Amount JOD" ></input>
                    </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
         </div>
        </div>
    </div>
@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#optionDropdown').change(function() {
                var selectedOption = $(this).val();

                $.ajax({
                    url: "../api/getPayments/" + selectedOption,
                    type: "GET",
                    success: function(response) {
                        // Populate the input field with the fetched data
                        $('#first').val(response.first);
                        $('#second').val(response.second);
                        $('#third').val(response.third);
                        $('#fourth').val(response.fourth);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

@endpush
@endsection

