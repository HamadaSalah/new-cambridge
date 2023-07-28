@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;margin-top: 0">New Facilities Img</h2>
<a href="{{route('admin.facil_cat.create')}}">  
    <button class="btn btn-primary" style="float: right"><i class="fa fa-plus"> </i> New Category </button>
</a>
<div class="clearfix"></div>
<div class="clear"></div>
    @if ($cats->count() > 0)
    <div class="table-responsive">
        <table class="table user-table no-wrap" id="myDTable">
            <thead>
                <tr>
                    <th class="border-top-0">#</th>
                    <th class="border-top-0">Img</th>
                    <th class="border-top-0">Categroy</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $cat)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>
                        <a data-fancybox="cat" href="{{asset($cat->img)}}"> <img src="{{asset($cat->img)}}" style="width: 100px;height: 100px;" class="img-thumbnail" alt=""></a>    
                    </td>
                    <td>{{$cat->name}}</td>
                    <td>
                        <form style="display: inline;" action="{{route('admin.facil_cat.destroy', $cat->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                        <a href="{{Route('admin.facil_cat.edit', $cat->id)}}">
                        <button class="btn btn-success" type="submit"><i class="fa fa-pencil-square-o"></i> Edit</button>
                    </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    @else
        <div class="text-center">No Data Available</div> 
    @endif
@endsection
